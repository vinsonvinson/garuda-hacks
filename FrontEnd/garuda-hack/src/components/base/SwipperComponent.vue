<script setup>
import { useRouter } from 'vue-router'
import BgPage from '../../assets/img/penari_jawa.png';

const router = useRouter()

const navigateToLearning = () => {
  router.push('/LearningPage')
}
</script>

<template>
  <div class="relative bg-cover bg-center min-h-screen flex items-center justify-center" 
       :style="{ backgroundImage: `url(${BgPage})` }">
    <div class="text-center text-white px-4 max-w-4xl">
      <h1 class="text-5xl md:text-6xl font-bold mb-6">
        Speak Javanese,<br>
        <span class="text-orange-400">Understand The Culture.</span>
      </h1>
      
      <p class="text-xl md:text-2xl mb-8 font-light leading-relaxed">
        IsoJowo isn't just about memorizing words. It's about learning the art of Javanese<br>
        etiquette, understanding social context, and speaking with confidence.
      </p>
      
      <button 
        class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105"
        @click="navigateToLearning">
        Start Learning For Free
      </button>
    </div>
  </div>
</template>