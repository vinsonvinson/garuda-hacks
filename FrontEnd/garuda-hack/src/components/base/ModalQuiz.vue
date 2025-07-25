<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import { useRoute, useRouter } from 'vue-router';

// Routing state
const route = useRoute();
const router = useRouter();

// Props
const props = defineProps({
    title: String,
    showButton: {
        type: Boolean,
        default: false
    }
});

const emit = defineEmits(['close']);
</script>

<template>
    <div class="fixed inset-0 bg[#fff7ed] flex flex-col justify-center items-center z-50 p-4">
        <div class="text-7xl mb-4">
            <span v-if="title === 'Practice'">🎓</span>
            <span v-else-if="title === 'Challenge'">🏆</span>
            <span v-else>🎉</span>
        </div>
        <h1 class="text-4xl font-bold text-gray-800 mb-6">{{ title }}</h1>

        <div v-if="!showButton" class="w-1/3 bg-gray-200 rounded-full h-2.5">
            <div class="bg-orange-400 h-2.5 rounded-full animate-pulse"></div>
        </div>

        <button v-if="showButton" @click="$emit('continue')" class="px-8 py-3 mt-4 bg-orange-500 text-white font-semibold rounded-lg hover:bg-orange-600">
            Lanjut
        </button>
    </div>
</template>