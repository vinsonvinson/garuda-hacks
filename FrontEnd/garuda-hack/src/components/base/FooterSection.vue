<script setup>
import { useRoute } from 'vue-router';
import { useRouter } from 'vue-router';

const route = useRoute();
const router = useRouter();

const navigateToLearning = () => {
    router.push('/LearningPage');
};
</script>

<template>
  <footer class="bg-orange-800 text-white py-12 px-4 sm:px-6 md:px-8">
    <div class="container mx-auto">
      <div class="text-center">
        <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mb-6">Let's start learning!</h3>
        <button 
          class="bg-white text-orange-700 hover:bg-gray-100 px-6 sm:px-8 py-3 sm:py-4 rounded-lg text-base sm:text-lg font-semibold transition-all duration-300"
          @click="navigateToLearning">
          Begin My Journey
        </button>
      </div>
      <div class="max-w-6xl mx-auto mt-5">
        <div class="border-t border-orange-700 pt-8">
          <!-- Footer Content -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <!-- Company Info -->
            <div class="md:col-span-2 text-center">
              <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-4">IsoJowo</h3>
              <p class="text-orange-200 mb-4 leading-relaxed text-base sm:text-lg">
                Preserving and revitalizing Javanese language and culture through innovative learning methods.
              </p>
            </div>
          </div>
        </div>

        <!-- Team Credits Section -->
        <div class="border-t border-orange-700 pt-8">
          <div class="text-center mb-6">
            <h4 class="text-lg sm:text-xl md:text-2xl font-semibold mb-4">Team Comps</h4>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 max-w-md mx-auto">
              <div class="text-center">
                <p class="text-orange-200 text-sm sm:text-base md:text-lg">Vinson</p>
              </div>
              <div class="text-center">
                <p class="text-orange-200 text-sm sm:text-base md:text-lg">Luis</p>
              </div>
              <div class="text-center">
                <p class="text-orange-200 text-sm sm:text-base md:text-lg">Fazle</p>
              </div>
              <div class="text-center">
                <p class="text-orange-200 text-sm sm:text-base md:text-lg">Miracle</p>
              </div>
            </div>
          </div>

          <!-- Copyright -->
          <div class="text-center border-t border-orange-700 pt-6 mt-4">
            <p class="text-orange-200 text-xs sm:text-sm mb-2">
              © 2025 IsoJowo. All Rights Reserved.
            </p>
            <p class="text-orange-300 text-xs">
              Made with ❤️ for Garuda Hacks 6.0
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>