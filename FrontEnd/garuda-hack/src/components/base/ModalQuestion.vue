<script setup>
import { ref, watch, computed, onMounted } from 'vue';
import Swal from 'sweetalert2';
import { useRouter } from 'vue-router'; // Import router
import ModuleService from '../../service/ModuleService.js';
import BgQuestion from '../../assets/img/bg_login.png';

const props = defineProps({
    questionData: Object,
    questionNumber: Number,
    totalQuestions: Number,
    isChallenge: Boolean,
    score: Number,
    moduleId: Number,
    typeId: Number
});

const emit = defineEmits(['submitAnswer', 'nextQuestion', 'finishQuiz', 'resetQuiz']);

const router = useRouter(); // Inisialisasi router

const selectedAnswer = ref(null);
const textAnswer = ref('');
const showAskAIButton = ref(false);
const aiButton = ref(false);
const aiFeedback = ref(null);
const isSubmittingAI = ref(false);
const userWrongAnswer = ref(null);
const answerState = ref('unanswered');
const correctAnswerFromServer = ref(null);
const hasUsedAskAI = ref(false);
const javaneseTypeName = computed(() => props.questionData.javanese_type_name || 'Ngoko');
const moduleTypeTitle = computed(() => props.questionData.module_type_title || 'Nyapa Konco');


const isLoading = ref(false); 

const submit = async () => {
    const answer = props.questionData.choices.length > 0 ? selectedAnswer.value : textAnswer.value;
    if (!answer) {
        Swal.fire({ icon: 'warning', title: 'Jawaban tidak boleh kosong!' });
        return;
    }
    isLoading.value = true;
    const payload = {
        question_id: props.questionData.id,
        answer: answer
    };
    try {
        const response = await ModuleService.checkAnswer(payload);
        const { is_correct, correct_answer } = response.data;
        answerState.value = is_correct ? 'correct' : 'incorrect';
        setTimeout(() => {
            if (!is_correct) {
                correctAnswerFromServer.value = correct_answer;
                userWrongAnswer.value = answer;
                showAskAIButton.value = true;
            } else {
                proceedToNextQuestion(answer);
            }
            isLoading.value = false;
        }, 1000);
    } catch (error) {
        isLoading.value = false;
        console.error("Gagal memeriksa jawaban:", error);
        Swal.fire({ icon: 'error', title: 'Gagal memeriksa jawaban', text: 'Silakan coba lagi.' });
    }
};

const handleAskAI = async () => {
    isSubmittingAI.value = true;
    isLoading.value = true;
    aiFeedback.value = null;
    try {
        const response = await ModuleService.askAi({
            question_id: props.questionData.id,
            wrong_answer: userWrongAnswer.value
        });
        aiFeedback.value = response.data.AI_response;
        hasUsedAskAI.value = true;
    } catch (error) {
        aiFeedback.value = "Maaf, terjadi kesalahan saat meminta bantuan AI.";
    } finally {
        isSubmittingAI.value = false;
        showAskAIButton.value = false;
        isLoading.value = false;
    }
};

const proceedToNextQuestion = async (answer) => {
    emit('submitAnswer', answer || userWrongAnswer.value);
    if (props.isChallenge && props.questionNumber === props.totalQuestions) {
        isLoading.value = true;
        try {
            await ModuleService.finishAnswer({
                module_id: props.moduleId,
                javanese_type_id: props.typeId,
            });
            emit('finishQuiz');
            isLoading.value = false;
            router.push({ name: 'LearningPage' });
        } catch (error) {
            isLoading.value = false;
            Swal.fire({ icon: 'error', title: 'Gagal submit final answer', text: 'Silakan coba lagi.' });
        }
    }
    resetLocalState();
};

const resetLocalState = () => {
    selectedAnswer.value = null;
    textAnswer.value = '';
    showAskAIButton.value = false;
    aiFeedback.value = null;
    userWrongAnswer.value = null;
    answerState.value = 'unanswered';
    correctAnswerFromServer.value = null;
    hasUsedAskAI.value = false;
};

watch(() => props.questionData, () => {
    resetLocalState();
});

watch(showAskAIButton, (val) => {
    aiButton.value = !!val;
});
</script>

<template>
  <div class="min-h-screen p-4 sm:p-8 flex items-center justify-center bg-pattern" :style="{ backgroundImage: `url(${BgQuestion})` }">
    <div class="w-full max-w-3xl bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-8">
        <div v-if="isLoading" class="absolute inset-0 bg-white/70 flex items-center justify-center z-50">
            <div class="loader"></div>
        </div>
        <!-- Buat header card -->
        <div class="mb-6 flex flex-col items-center">
          <div class="text-3xl font-bold text-gray-700">
            {{ javaneseTypeName }} - {{ moduleTypeTitle }}
          </div>
          <div class="mt-1 text-xl font-semibold text-orange-600 px-3 py-1 rounded-full bg-orange-50">
            {{ isChallenge ? 'Final Quiz' : 'Learning Phase' }}
          </div>
        </div>
        <div class="flex justify-between items-center mb-4">
        <p class="text-gray-600 font-semibold">Question {{ questionNumber }} out of {{ totalQuestions }}</p>
        </div>
      
      <div class="w-full bg-gray-200 rounded-full h-2.5 mb-6">
        <div class="bg-yellow-400 h-2.5 rounded-full" :style="{ width: `${(questionNumber / totalQuestions) * 100}%` }"></div>
      </div>
      <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center min-h-[100px]">{{ questionData.question }}</h2>

      <div class="space-y-4">
        <template v-if="questionData.choices.length > 0">
          <button
            v-for="choice in questionData.choices"
            :key="choice.id"
            @click="selectedAnswer = choice.text"
            :disabled="isChallenge && answerState !== 'unanswered'"
            class="w-full text-left p-4 rounded-xl border-2 transition"
            :class="[
                // Logika default saat belum dijawab
                { 'bg-orange-50 border-orange-200 hover:bg-orange-100': answerState === 'unanswered' },
                { 'bg-orange-400 border-orange-500 text-white': answerState === 'unanswered' && selectedAnswer === choice.text },
                // Logika setelah dijawab (hanya di mode challenge)
                { 'bg-green-100 border-green-500 text-green-800': isChallenge && answerState === 'correct' && selectedAnswer === choice.text },
                { 'bg-red-100 border-red-500 text-red-800': isChallenge && answerState === 'incorrect' && selectedAnswer === choice.text },
                { 'opacity-70': isChallenge && answerState !== 'unanswered' && selectedAnswer !== choice.text }
            ]"
          >
            {{ choice.text }}
          </button>
        </template>
        
        <template v-else>
          <input 
            v-model="textAnswer"
            type="text" 
            :readonly="isChallenge && answerState !== 'unanswered'"
            class="w-full p-4 border-2 rounded-xl focus:ring-orange-500 focus:border-orange-500 transition"
            :class="{
                'border-green-500 bg-green-50 ring-2 ring-green-200':  answerState === 'correct',
                'border-red-500 bg-red-50 ring-2 ring-red-200':  answerState === 'incorrect',
                'border-orange-300': answerState === 'unanswered'
            }"
            placeholder="Ketik jawabanmu..."
          />
        </template>
      </div>

        <div v-if="correctAnswerFromServer" class="mt-6">
          <div class="p-4 bg-red-50 border-l-4 border-red-400 text-red-800 rounded-r-lg mb-4">
            <p class="font-bold">Jawaban yang Benar:</p>
            <p>{{ correctAnswerFromServer }}</p>
          </div>
          <div v-if="aiFeedback" class="p-4 bg-blue-50 border-l-4 border-blue-400 text-blue-800 rounded-r-lg">
            <p class="font-bold">AI Feedback:</p>
            <p>{{ aiFeedback }}</p>
          </div>
        </div>
      
<div class="mt-8 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
  <div v-if="isChallenge" class="bg-gray-800 text-white font-bold px-6 py-2 rounded-lg text-center sm:text-left">
    SCORE: {{ score }}%
  </div>
  <div v-else class="hidden sm:block"></div>

          <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
            <button
              v-if="showAskAIButton"
              @click="handleAskAI"
              :disabled="isSubmittingAI"
              class="px-10 py-3 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 disabled:bg-blue-300 w-full sm:w-auto"
            >
              {{ isSubmittingAI ? 'Loading...' : 'Ask AI' }}
            </button>
            <button
              @click="hasUsedAskAI ? proceedToNextQuestion() : (aiButton ? proceedToNextQuestion() : submit())"
              class="px-10 py-3 bg-orange-500 text-white font-semibold rounded-lg hover:bg-orange-600 disabled:bg-orange-300 w-full sm:w-auto"
              :disabled="!aiButton && (questionData.choices.length > 0 ? !selectedAnswer : !textAnswer || textAnswer === '0')"
            >
              NEXT
            </button>
          </div>
        </div>
    </div>
  </div>
</template>

<style>
.loader {
  border: 6px solid #f3f3f3;
  border-top: 6px solid #f59e42;
  border-radius: 50%;
  width: 48px;
  height: 48px;
  animation: spin 1s linear infinite;
}
@keyframes spin {
  0% { transform: rotate(0deg);}
  100% { transform: rotate(360deg);}
}
</style>