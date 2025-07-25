<script setup>
import { ref, onMounted, computed } from 'vue';
import { useRoute } from 'vue-router';
import ModuleService from '../service/ModuleService';
import ModalQuiz from '../components/base/ModalQuiz.vue';
import ModalQuestion from '../components/base/ModalQuestion.vue';

const route = useRoute();

// State management
const quizState = ref('intro_practice'); 
const allQuestions = ref([]);
const currentQuestionIndex = ref(0);
const score = ref(0);
const userAnswers = ref([]);

// Data Fetching
onMounted(async () => {
  const { moduleId, typeId } = route.params;
  try {
    const response = await ModuleService.getQuestion(moduleId, typeId);
    allQuestions.value = response.data.questions;

    // Mulai alur setelah data didapat
    setTimeout(() => {
      quizState.value = 'in_practice';
    }, 1500); 
    
  } catch (error) {
    console.error("Gagal mengambil data kuis:", error);
  }
});

// Computed properties untuk memfilter soal
const practiceQuestions = computed(() => allQuestions.value.filter(q => q.is_learning === "1"));
const challengeQuestions = computed(() => allQuestions.value.filter(q => q.is_learning === "0"));

const currentQuestionsSet = computed(() => {
  return quizState.value === 'in_practice' ? practiceQuestions.value : challengeQuestions.value;
});

const currentQuestionData = computed(() => {
  return currentQuestionsSet.value[currentQuestionIndex.value];
});

// Logika Kuis
function handleAnswerSubmit(answer) {
  if (!currentQuestionData.value) return;

  userAnswers.value.push({ questionId: currentQuestionData.value.id, answer });

  // Cek jawaban & update skor hanya saat challenge
  if (quizState.value === 'in_challenge') {
    if (answer === currentQuestionData.value.answer) {
      score.value += 100 / challengeQuestions.value.length;
    }
  }

  // Lanjut ke soal berikutnya atau state berikutnya
  if (currentQuestionIndex.value < currentQuestionsSet.value.length - 1) {
    currentQuestionIndex.value++;
  } else {
    // Selesai practice, masuk ke intro challenge
    if (quizState.value === 'in_practice') {
      quizState.value = 'intro_challenge';
      currentQuestionIndex.value = 0; 
    } 
    // Selesai challenge
    else if (quizState.value === 'in_challenge') {
      quizState.value = 'complete';
    }
  }
}

function handleContinueToChallenge() {
  quizState.value = 'in_challenge';
}

// onMounted(async () => {
//   const { moduleId, typeId } = route.params;
//   try {
//     const response = await ModuleService.getQuestion(moduleId, typeId);
//     allQuestions.value = response.data.questions;
//     console.log('Soal didapat:', allQuestions.value); // Debug
//     console.log('Practice:', practiceQuestions.value); // Debug
//     console.log('Challenge:', challengeQuestions.value); // Debug

//     setTimeout(() => {
//       quizState.value = 'in_practice';
//       console.log('Quiz state:', quizState.value); // Debug
//     }, 1500); 
    
//   } catch (error) {
//     console.error("Gagal mengambil data kuis:", error);
//   }
// });
</script>

<template>
  <div>
    <ModalQuiz v-if="quizState === 'intro_practice'" title="Practice" />
    
    <ModalQuestion
      v-if="(quizState === 'in_practice' || quizState === 'in_challenge') && currentQuestionData"
      :question-data="currentQuestionData"
      :question-number="currentQuestionIndex + 1"
      :total-questions="currentQuestionsSet.length"
      :is-challenge="quizState === 'in_challenge'"
      :score="Math.round(score)"
      @submit-answer="handleAnswerSubmit"
      :moduleId="route.params.moduleId"
      :typeId="route.params.typeId"
    />
    
    <ModalQuiz 
      v-if="quizState === 'intro_challenge'" 
      title="Challenge" 
      :show-button="true"
      @continue="handleContinueToChallenge"
    />

    <ModalQuiz v-if="quizState === 'complete'" title="Quiz Selesai!" />
  </div>
</template>