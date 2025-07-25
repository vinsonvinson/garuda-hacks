<script setup>

import { ref, defineProps, defineEmits } from 'vue';
import { useRoute, useRouter } from 'vue-router';

const props = defineProps({
    moduleId: {
        type: Number,
        required: true,
    },
    types: {
        type: Array,
        required: true,
    }
})

const emit = defineEmits(['close', 'selectType']);
const router = useRouter();

const handleSelectType = (type) => {
  if (type.is_unlock) {
    router.push({ 
      name: 'QuizPage', 
      params: { 
        moduleId: props.moduleId, 
        typeId: type.id 
      } 
    });
  }
};

</script>

<template>
    <div @click="$emit('close')" class="fixed inset-0 bg-white/60 backdrop-blur-md flex justify-center items-center z-50">
        <div @click.stop class="bg-[#fff7ed] p-8 rounded-2xl shadow-lg w-full max-w-md relative animate-fade-in">
            <button @click="$emit('close')" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>

            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Pilih boso seng koe pengen!</h2>

            <div class="space-y-4">
                <button
                    v-for="type in types"
                    :key="type.id"
                    @click="handleSelectType(type)"
                    :disabled="!type.is_unlock"
                    class="w-full flex items-center justify-between p-4 rounded-lg text-lg font-semibold transition-transform transform hover:scale-105"
                    :class="{
                        'bg-orange-200 text-orange-800 hover:bg-orange-300': type.is_unlock,
                        'bg-gray-200 text-gray-500 cursor-not-allowed': !type.is_unlock
                    }"
                >
                    <span>{{ type.name }}</span>
                    <span class="flex items-center">
                        <svg v-if="type.is_completed" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>

                        <svg v-else-if="!type.is_unlock" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
            </div> 
        </div>
    </div>
</template>

<style scoped>
/* Animasi sederhana untuk modal */
.animate-fade-in {
  animation: fadeIn 0.3s ease-out;
}
@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}
</style>