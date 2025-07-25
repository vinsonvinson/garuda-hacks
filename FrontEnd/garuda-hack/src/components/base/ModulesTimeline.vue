<script setup>
import { ref, onMounted, computed } from 'vue';
import ModuleService from '../../service/ModuleService.js';
import ModalLanguage from './ModalLanguage.vue';

const modules = ref([]);
const isModalVisible = ref(false);
const selectedModule = ref(null);

const fetchModules = async () => {
  try {
    const response = await ModuleService.getModulesAndStreak();
    if (response.data && response.data.modules) {
      modules.value = response.data.modules;
    }
  } catch (error) {
    console.error('Failed to fetch modules:', error);
  }
};

const openModuleModal = (modul) => {
    if(modul.is_unlock){
        selectedModule.value = modul;
        isModalVisible.value = true;
    }
}

const closeModuleModal = () => {
    isModalVisible.value = false;
    selectedModule.value = null;
};

onMounted(() => {
    fetchModules();
});

const isModuleCompleted = (modul) => {
  // Logika tidak berubah: modul selesai jika semua sub-modul selesai
  if (modul && modul.type) {
    return modul.type.every(subModule => subModule.is_completed);
  }
  return false;
};
</script>

<template>
      <div class="p-8 font-sans max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold text-center mb-16 text-gray-700">Learning Modules</h1>
        <div class="relative">
          <div class="relative flex flex-col items-center">
            <div v-if="modules.length > 0" v-for="modul in modules" :key="modul.id" class="relative w-full mb-16">
              
              <div @click="openModuleModal(modul)" class="flex items-center justify-center relative" :class="{ 'cursor-pointer': modul.is_unlock, 'cursor-not-allowed': !modul.is_unlock }">
                
                <div 
                  v-if="modul.id % 2 !== 0"
                  class="flex items-center w-full max-w-md mr-8"
                >
                  <div class="ml-auto">
                    <div class="p-4 rounded-lg bg-gray-50 shadow-sm text-right">
                      <h3 class="font-bold text-lg text-gray-800">{{ modul.title }}</h3>
                    </div>
                  </div>
                </div>
    
                <div class="flex-shrink-0 z-20 relative">
                  <div 
                    class="w-20 h-20 rounded-full flex items-center justify-center border-4 border-white transition-all duration-300"
                    :class="modul.is_unlock ? 'bg-orange-400 ring-4 ring-orange-200' : 'bg-gray-300'"
                  >
                    <img :src="modul.img_url" alt="module icon" class="w-10 h-10">
                  </div>
                </div>
    
                    <div v-if="modul.is_unlock && isModuleCompleted(modul)" class="ml-4 flex items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                      </svg>
                    </div>
                
                <div 
                  v-if="modul.id % 2 === 0"
                  class="flex items-center w-full max-w-md ml-8"
                >
                  <div class="mr-auto">
                    <div class="p-4 rounded-lg bg-gray-50 shadow-sm text-left">
                      <h3 class="font-bold text-lg text-gray-800">{{ modul.title }}</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div v-else>
              <p class="text-gray-500">Loading modules...</p>
            </div>
          </div>
        </div>
        
        <ModalLanguage
          v-if="isModalVisible" 
          :types="selectedModule.type" 
          @close="closeModuleModal"
          :module-id="selectedModule.id"
      />
    </div>
</template>