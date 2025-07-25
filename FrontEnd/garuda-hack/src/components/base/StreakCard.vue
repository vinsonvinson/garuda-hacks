<script setup>
import { ref, onMounted } from 'vue';
import ModuleService from '../../service/ModuleService'; 

const streakCount = ref(0);
const weekData = ref([]);

const days = ['S', 'M', 'T', 'W', 'T', 'F', 'S'];
const todayIndex = new Date().getDay();

const fetchStreakData = async () => {
  try {
    const response = await ModuleService.getModulesAndStreak();
    if (response.data) {
      streakCount.value = response.data.current_streak;
      weekData.value = response.data.week;
    }
  } catch (error) {
    console.error('Failed to fetch streak data:', error);
  }
};

const isCompleted = (dayIndex) => {
  if (weekData.value.length === 7) {
    return weekData.value[dayIndex]?.is_streak ?? false;
  }
  return false;
};

onMounted(fetchStreakData);
</script>

<template>
    <div class="p-8 flex flex-col items-center gap-6">
        <h1 class="text-5xl font-bold text-gray-800">Halo Rek!</h1>
        <div class="bg-orange-100 rounded-xl p-6 w-full max-w-xl shadow-lg">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Gawean</h2>
                <span class="bg-orange-200 text-orange-400 px-3 py-1 rounded-full text-sm font-medium">{{ streakCount }} days in a row!</span>
            </div>
            <div class="flex justify-around">
                <div v-for="(day, index) in days" :key="index" class="flex flex-col items-center gap-2">
                    <div class="flex items-center justify-center">
                        <svg v-if="isCompleted(index)" class="text-yellow-500" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                        <svg v-else class="text-gray-800" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                    </div>
                    <span :class="['text-base font-bold', index === todayIndex ? 'text-orange-500' : 'text-gray-600']">{{ day }}</span>
                </div>
            </div>
        </div>
    </div>
</template>