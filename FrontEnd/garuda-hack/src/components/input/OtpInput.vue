<script setup>
import { ref, reactive, computed, watch, onMounted } from 'vue';
import { useField } from 'vee-validate';

// Props yang diterima komponen
const props = defineProps({
  name: {
    type: String,
    required: true,
  },
  digitCount: {
    type: Number,
    default: 6,
  },
});

// Integrasi dengan VeeValidate
const { value, errorMessage } = useField(() => props.name);

// State internal komponen
const digits = reactive(Array(props.digitCount).fill(''));
const inputRefs = ref([]);

// Fungsi untuk menangani input dan auto-focus
const handleInput = (index) => {
  if (!/^[0-9]$/.test(digits[index - 1])) {
    digits[index - 1] = '';
    return;
  }
  if (digits[index - 1] && index < props.digitCount) {
    inputRefs.value[index].focus();
  }
};

// Fungsi untuk menangani backspace
const handleKeyDown = (index, event) => {
  if (event.key === 'Backspace' && !digits[index - 1] && index > 1) {
    inputRefs.value[index - 2].focus();
  }
};

// Fungsi untuk menangani paste
const handlePaste = (event) => {
  event.preventDefault();
  const pastedData = event.clipboardData.getData('text').replace(/\D/g, '');
  if (pastedData) {
    for (let i = 0; i < props.digitCount; i++) {
      if (pastedData[i]) {
        digits[i] = pastedData[i];
      }
    }
    const lastFilledIndex = Math.min(pastedData.length, props.digitCount) - 1;
    inputRefs.value[lastFilledIndex].focus();
  }
};

// Menggabungkan semua digit menjadi satu string dan mengupdate VeeValidate
const otpValue = computed(() => digits.join(''));
watch(otpValue, (newValue) => {
  value.value = newValue;
});

// Fokus ke input pertama saat komponen dimuat
onMounted(() => {
  inputRefs.value[0]?.focus();
});
</script>

<template>
  <div class="mb-4">
    <div class="flex items-center justify-center gap-2 sm:gap-3">
      <template v-for="i in digitCount" :key="i">
        <input
          :ref="(el) => { if (el) inputRefs[i - 1] = el }"
          v-model="digits[i - 1]"
          type="tel"
          maxlength="1"
          class="w-12 h-14 sm:w-14 sm:h-16 text-center text-2xl font-semibold border rounded-lg focus:outline-none focus:ring-2 transition"
          :class="errorMessage ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300 focus:ring-[#f59e0b] focus:border-[#f59e0b]'"
          @input="handleInput(i)"
          @keydown="handleKeyDown(i, $event)"
          @paste="handlePaste"
        />
      </template>
    </div>
    <p v-if="errorMessage" class="text-red-600 text-sm mt-2 text-center">{{ errorMessage }}</p>
  </div>
</template>