<script setup>
import { useRouter } from 'vue-router'

const router = useRouter()
</script>

<template>
  <div class="bg-gray-50 py-16 px-4 sm:px-6 md:px-8">
    <div class="max-w-6xl mx-auto">
      <!-- Why IsoJowo Is Different Section -->
      <div class="text-center mb-16">
        <h2 class="text-3xl sm:text-4xl font-bold text-orange-700 mb-4">
          Why IsoJowo Is Different?
        </h2>
        <p class="text-gray-600 text-base sm:text-lg">
          We focus on what matters most: real-world application and cultural wisdom.
        </p>
      </div>

      <!-- Three Features Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
        <div class="bg-[#FFFCF6] rounded-lg p-6 sm:p-8 shadow-md text-center">
          <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
          <h3 class="text-lg sm:text-xl font-bold text-orange-700 mb-4">Context-Based Learning</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Choose a topic, then learn how to speak in different social contexts: casual ("Ngoko"), polite ("Krama Madya"), and respectful ("Krama Inggil").
          </p>
        </div>

        <div class="bg-[#FFFCF6] rounded-lg p-6 sm:p-8 shadow-md text-center">
          <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
          </div>
          <h3 class="text-lg sm:text-xl font-bold text-orange-700 mb-4">Gladhen Trapsila</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Our unique "Etiquette Practice" modules test your cultural fluency, challenging you to choose the right phrase for real-life scenarios.
          </p>
        </div>

        <div class="bg-[#FFFCF6] rounded-lg p-6 sm:p-8 shadow-md text-center">
          <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
          </div>
          <h3 class="text-lg sm:text-xl font-bold text-orange-700 mb-4">Immersive Experience</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            From the Batik-inspired design to the Gamelan sound effects, every detail is crafted to immerse you in the beauty of Javanese culture.
          </p>
        </div>
      </div>

      <!-- Learning Method Section -->
      <div class="bg-orange-50 rounded-lg p-6 sm:p-12">
        <div class="text-center mb-12">
          <h2 class="text-3xl sm:text-4xl font-bold text-orange-800 mb-4">
            A Smarter Way to Learn
          </h2>
          <p class="text-gray-600 text-base sm:text-lg">
            Our unique 3-step method makes learning intuitive and effective.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
          <div class="text-center">
            <div class="w-16 sm:w-20 h-16 sm:h-20 bg-orange-700 rounded-full flex items-center justify-center mx-auto mb-6">
              <span class="text-white text-xl sm:text-2xl font-bold">1</span>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-orange-800 mb-3">Choose A Topic</h3>
            <p class="text-gray-600 text-sm">
              Select a real-world theme you want to learn, like "Greetings" or "Shopping".
            </p>
          </div>

          <div class="text-center">
            <div class="w-16 sm:w-20 h-16 sm:h-20 bg-orange-700 rounded-full flex items-center justify-center mx-auto mb-6">
              <span class="text-white text-xl sm:text-2xl font-bold">2</span>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-orange-800 mb-3">Select A Context</h3>
            <p class="text-gray-600 text-sm">
              Practice the topic in different social contexts: Casual, Polite, or Respectful.
            </p>
          </div>

          <div class="text-center">
            <div class="w-16 sm:w-20 h-16 sm:h-20 bg-orange-700 rounded-full flex items-center justify-center mx-auto mb-6">
              <span class="text-white text-xl sm:text-2xl font-bold">3</span>
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-orange-800 mb-3">Master The Etiquette</h3>
            <p class="text-gray-600 text-sm">
              Unlock real pass the "Gladhen Trapsila" to prove your cultural understanding.
            </p>
          </div>
        </div>

        <!-- Our Vision Section -->
        <div class="text-center mb-8">
          <h2 class="text-2xl sm:text-3xl font-bold text-orange-800 mb-6">Our Vision</h2>
          <p class="text-gray-600 text-base sm:text-lg leading-relaxed max-w-4xl mx-auto">
            We believe that language is the window to the soul of a culture. With IsoJowo, 
            we hope to preserve and revitalize the Javanese language, bridge the 
            communication gap between generations, and reignite a love for one of 
            Indonesia's most precious cultural heritage.
          </p>
        </div>
      </div>
    </div>
  </div>
</template>