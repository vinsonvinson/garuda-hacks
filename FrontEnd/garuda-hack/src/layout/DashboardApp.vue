<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import HeaderSection from '@/components/base/HeaderSection.vue';
import FooterSection from '@/components/base/FooterSection.vue';
import { useRoute } from 'vue-router';
import BgBatik from '../assets/img/bg_login.png';


const route = useRoute();

const showFooter = ref(false);

const handleScroll = () => {
    const isAtBottom = window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 5;

    showFooter.value = isAtBottom;
}

onMounted(() => {
    handleScroll(); 
    window.removeEventListener('scroll', handleScroll);
})

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
    <div class="flex flex-col min-h-screen">
        <HeaderSection />
        <main class="flex-1 bg-gray-200" :style="{ backgroundImage: `url(${BgBatik})` }">
            <router-view />
        </main>
        <FooterSection v-if="route.path === '/HomePage'"/>
    </div>
</template>

<style>
</style>