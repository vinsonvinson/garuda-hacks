<script setup>
import { ref } from 'vue';
import { useRouter } from 'vue-router';
import Swal from 'sweetalert2';
import LogoJowo from '../../../public/logo_jawa.png';

const router = useRouter();
const menuOpen = ref(false);

const handleNav = (routeName) => {
    router.push({ name: routeName });
    menuOpen.value = false;
};

const handleLogout = async () => {
    const result = await Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to log in again without your password!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, log out!'
    });
    if (result.isConfirmed){
        Swal.fire({
            icon: 'success',
            title: 'Logged out!',
            text: 'You have been logged out successfully.',
            delay: 1500
        }).then(() => {
            router.push('/login');
        });
    }
    menuOpen.value = false;
};
</script>

<template>
  <nav class="bg-[#FFE8CF] text-[#000] shadow-xl border-b-2 border-[#dcbb98]">
    <div class="container mx-auto px-4">
      <div class="relative flex flex-col sm:flex-row justify-between items-start h-auto sm:h-20 py-4 sm:py-0">
        <div class="flex items-center space-x-2 mb-2 sm:mb-0">
          <img :src="LogoJowo" alt="Logo Jawa" class="h-12 w-12 sm:h-16 sm:w-16">
          <p class="text-lg sm:text-xl font-semibold mt-2 sm:mt-3" style="font-family: 'JawaPalsu', sans-serif;">IsoJowo</p>
        </div>
        <!-- Hamburger Button -->
        <button
          class="sm:hidden absolute right-4 top-4 flex items-center px-3 py-2 border rounded text-orange-700 border-orange-700"
          @click="menuOpen = !menuOpen"
          aria-label="Toggle menu"
        >
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
        <!-- Menu Items -->
        <div
          class="flex-col sm:flex-row flex-wrap gap-2 sm:gap-8 items-center w-full sm:w-auto mt-4 sm:mt-5"
          :class="[menuOpen ? 'flex' : 'hidden', 'sm:flex']"
        >
          <button @click="handleNav('HomePage')" class="text-base sm:text-lg hover:text-[#f0a24f] font-semibold transition w-full sm:w-auto text-left sm:text-center py-2 sm:py-0">Home</button>
          <button @click="handleNav('LearningPage')" class="text-base sm:text-lg hover:text-[#f0a24f] font-semibold transition w-full sm:w-auto text-left sm:text-center py-2 sm:py-0">Modul</button>
          <button @click="handleNav('Profile')" class="text-base sm:text-lg hover:text-[#f0a24f] font-semibold transition w-full sm:w-auto text-left sm:text-center py-2 sm:py-0">Profile</button>
          <button @click="handleLogout" class="text-base sm:text-lg hover:text-red-500 font-semibold transition w-full sm:w-auto text-left sm:text-center py-2 sm:py-0">Logout</button>
        </div>
      </div>
    </div>
  </nav>
</template>