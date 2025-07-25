<script setup>
import { ref, onMounted, computed } from 'vue';
import AuthService from '../service/AuthService';
import BgQuestion from '../assets/img/bg_login.png';

const profileData = ref(null);
const isLoading = ref(true);

onMounted(async () => {
  try {
    const response = await AuthService.getProfile();
    profileData.value = response.data;
  } catch (error) {
    console.error("Gagal manggil data gaib, mungkin sinyalnya jelek:", error);
  } finally {
    isLoading.value = false;
  }
});

const mainProgress = computed(() => {
  if (!profileData.value) return 0;
  return profileData.value.progress * 100;
});
</script>

<template>
  <div class="min-h-screen bg-pattern p-4 sm:p-6 md:p-8 flex items-center justify-center font-sans" :style="{ backgroundImage: `url(${BgQuestion})` }">
    
    <div v-if="isLoading" class="text-center">
      <p class="text-2xl font-bold text-orange-500 animate-pulse">Please wait patiently...</p>
    </div>

    <div v-else-if="profileData" class="w-full max-w-6xl mx-auto bg-white rounded-2xl shadow-lg p-4 sm:p-8 grid grid-cols-1 lg:grid-cols-3 gap-6 sm:gap-8">
      
      <!-- Profile & Stats -->
      <div class="lg:col-span-1 flex flex-col items-center text-center">
        <img :src="profileData.profile_pict" alt="User Profile Picture" class="w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 rounded-full object-cover border-8 border-white shadow-md -mt-16 sm:-mt-24">
        
        <div class="mt-6 sm:mt-8 w-full bg-gray-50 p-4 sm:p-6 rounded-lg shadow-inner">
          <h3 class="font-bold text-gray-500 mb-4 text-base sm:text-lg text-center sm:text-center">QUICK STATS</h3>
          <div class="flex flex-col sm:flex-row justify-around items-center gap-4 sm:gap-0 text-center sm:text-left">
            <div>
              <p class="text-2xl sm:text-3xl font-bold text-orange-500 text-center sm:text-center">{{ profileData.completed }}</p>
              <p class="text-xs sm:text-sm text-gray-600 text-center sm:text-center">Modules Completed</p>
            </div>
            <div>
              <p class="text-2xl sm:text-3xl font-bold text-orange-500 text-center sm:text-center">{{ profileData.current_streak }}</p>
              <p class="text-xs sm:text-sm text-gray-600 text-center sm:text-center">Current Streak</p>
            </div>
            <div>
              <p class="text-2xl sm:text-3xl font-bold text-orange-500 text-center sm:text-center">{{ profileData.highest_streak }}</p>
              <p class="text-xs sm:text-sm text-gray-600 text-center sm:text-center">Highest Streak</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Detail & Progress -->
      <div class="lg:col-span-2">
        <div class="flex flex-col sm:flex-row justify-between items-center sm:items-start gap-2">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-800 text-center sm:text-left">{{ profileData.fullname }}</h1>
            <span class="bg-orange-100 text-orange-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mt-2 sm:mt-0 text-center sm:text-left">ACTIVE USER</span>
        </div>
        
        <div class="mt-4">
          <p class="text-xs sm:text-sm font-medium text-gray-500 text-center sm:text-left">Learning Progress</p>
          <div class="w-full bg-gray-200 rounded-full h-3 sm:h-4 mt-1">
            <div class="bg-gradient-to-r from-yellow-400 to-orange-500 h-3 sm:h-4 rounded-full" :style="{ width: `${mainProgress}%` }"></div>
          </div>
        </div>
        
        <div class="mt-8 sm:mt-10 space-y-6 sm:space-y-8">
            <div>
                <h2 class="text-center sm:text-left text-xl sm:text-2xl font-bold text-gray-700">Modules Conquered</h2>
                <div class="flex flex-col sm:flex-row items-center mt-2 gap-2 sm:gap-4">
                    <div class="bg-orange-100 text-orange-600 font-bold w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-full text-lg sm:text-xl text-center sm:text-left">{{ profileData.completed }}</div>
                    <p class="text-gray-600 text-sm sm:text-base text-center sm:text-left">Out of all available modules. Awesome!</p>
                </div>
            </div>
            <div>
                <h2 class="text-center sm:text-left text-xl sm:text-2xl font-bold text-gray-700">Longest Streak</h2>
                <div class="flex flex-col sm:flex-row items-center mt-2 gap-2 sm:gap-4">
                    <div class="bg-orange-100 text-orange-600 font-bold w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center rounded-full text-lg sm:text-xl text-center sm:text-left">{{ profileData.highest_streak }}</div>
                    <p class="text-gray-600 text-sm sm:text-base text-center sm:text-left">Days of consecutive learning. Keep it up!</p>
                </div>
            </div>
        </div>
      </div>
    </div>
    
    <div v-else class="text-center">
        <p class="text-2xl font-bold text-red-500">Oops, data not found! Please reload.</p>
    </div>
  </div>
</template>