<script setup>
import { ref, onMounted, computed, watch } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import { storeToRefs } from 'pinia';
import { useAuthStore } from '../../stores/auth';
import InputField from '@/components/input/InputField.vue';
import { Form } from 'vee-validate';
import * as yup from 'yup';
import { config } from '../../config.js'
import Swal from 'sweetalert2';
import AuthService from '@/service/AuthService';
import BgLogin from '../../assets/img/bg_login.png';
import ImgForm from '../../assets/img/image_form.png';

const router = useRouter();
const { token } = storeToRefs(useAuthStore());

// Perubahan title page berdasarkan tipe halaman
const pageTitle = computed(() => {
    if(props.pageType === 'login') {
        return 'Welcome back to Iso Jowo';
    } else if(props.pageType === 'register') {
        return 'Register Your Account';
    } else if (props.pageType === 'emailInput'){
        return 'Enter Your Email';
    }
    return '';
});

// Perubahan Submit Button berdasarkan tipe halaman
const submitButtonText = computed(() => {
    if(props.pageType === 'login') {
        return 'Login';
    } else if(props.pageType === 'register') {
        return 'Register';
    } else if (props.pageType === 'emailInput'){
        return 'Next';
    }
    return '';
})

// Perubahan link registrasi atau login berdasarkan tipe halaman
const alternateActionText = computed(() => props.pageType === 'login' ? "Don't have an account yet?" : 'Already have an account?');
const alternateActionLinkText = computed(() => props.pageType === 'login' ? 'Register' : 'Login');

// Props untuk page registrasi atau login
const props = defineProps({
    pageType: {
        type: String,
        default: 'login'
    }
});

// Schema validasi untuk form
const schema = computed(() => {
    if (props.pageType === 'register') {
        return yup.object({
            name: yup.string().required('Name is required'),
            email: yup.string().email('Invalid email format').required('Email is required'),
            password: yup.string().min(8, 'Password must be at least 8 characters').required('Password is required'),
            password_confirmation: yup.string()
                .oneOf([yup.ref('password')], 'Passwords must match')
                .required('Password confirmation is required')
        });
    } else if (props.pageType === 'emailInput') {
        return yup.object({
            email: yup.string().email('Invalid email format').required('Email is required')
        });
    }
    // Skema untuk login
    return yup.object({
        email: yup.string().email().required(),
        password: yup.string().min(8).required()
    });
});

// Fungsi untuk menangani submit form
const onSubmit = async (values) => {

    if (props.pageType === 'login') {
    Swal.fire({
            icon: 'info',
            title: 'Logging In...',
            text: 'Please wait while we log you in.',
            showConfirmButton: false,
            allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    try {

    const response = await AuthService.requestLogin({
        email: values.email,
        password: values.password
    });

    const token = response.data.access_token;

    localStorage.setItem('user_token', token);

    Swal.fire({
            icon: 'success',
            title: 'Login Successful!',
            text: `Welcome, Back!`,
            loaderHtml: '<i class="fas fa-spinner fa-spin"></i>',
            timer: 1000,
            showConfirmButton: false
        }).then(() => {
            router.push({ name: 'HomePage' });
        });   
    } catch (error) {
        const errorMessage = error.response?.data?.message || 'An error occurred. Please try again.';
        Swal.fire({
            icon: 'error',
            title: 'Login Failed',
            text: errorMessage
        });
    }
    } else if (props.pageType === 'register') {
        Swal.fire({
            icon: 'info',
            title: 'Registering...',
            text: 'Please wait while we create your account.',
            showConfirmButton: false,
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });
        
        try {
            await AuthService.register({
                name: values.name,
                email: values.email,
                password: values.password,
                password_confirmation: values.password_confirmation
            });

            Swal.fire({
                icon: 'success',
                title: 'Registration Successful!',
                text: 'A verification code has been sent to your email.',
            }).then(() => {
                router.push({ 
                    name: 'OtpPage',
                    query: { email: values.email }
                });
            });

        } catch (error) {
            const errorMessage = error.response?.data?.message || 'An error occurred. Please try again.';
            Swal.fire({
                icon: 'error',
                title: 'Registration Failed',
                text: errorMessage
           });
        }
    } else if (props.pageType === 'emailInput'){
        Swal.fire({
            icon: 'info',
            title: 'Checking Email...',
            text: 'Please wait while we check your email.',
            showConfirmButton: false,
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        try{
            await AuthService.requestForgotPassword({
                email: values.email
            });

            Swal.fire({
                icon: 'success',
                title: 'Email Sent!',
                text: 'A verification code has been sent to your email.',
            }).then(() => {
                router.push({ 
                    name: 'OtpPage',
                    query: { email: values.email, from: 'forgot-password' }
                });
            });
        } catch (error) {
            const errorMessage = error.response?.data?.message || 'An error occurred. Please try again.';
            Swal.fire({
                icon: 'error',
                title: 'Email Check Failed',
                text: errorMessage
            });
        }
    }
};

// Handle untuk berpindah halaman registrasi atau login
const handleAlternateAction = () => {
    // Di aplikasi nyata, ini akan menggunakan router.push() untuk berpindah halaman
    const newPageType = props.pageType === 'login' ? 'register' : 'login';
    router.push({ name: newPageType.charAt(0).toUpperCase() + newPageType.slice(1)});
}

// Handle untuk berpindah halaman forgot password
const handleForgotPassword = () => {
    router.push({ path: '/emailInput' });
}

</script>

<template>
    <div class="flex items-center justify-center min-h-screen" :style="`background: url('${BgLogin}') center center / cover no-repeat`">
        <div class="flex w-full max-w-4xl bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Untuk bagian kanan -->
            <div class="hidden md:block md:basis-[45%] rounded-tr-[250px] rounded-br-[250px]" :style="`background: url('${ImgForm}') center center / cover no-repeat`">

            </div>

            <!-- Untuk bagian kiri yaitu field input -->
            <div class="flex-1 flex flex-col justify-center px-8 sm:px-12 py-8">
                <Form @submit="onSubmit" :validation-schema="schema" class="w-full">
                    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">{{ pageTitle }}</h2>

                    <InputField 
                        v-if="props.pageType === 'register'"
                        name="name"
                        label="Username"
                        type="text"
                        placeholder="Enter your username"
                    />

                    <InputField 
                        name="email"
                        label="Email"
                        type="email"
                        placeholder="Enter your email"
                    />

                    <InputField 
                        v-if="props.pageType !== 'emailInput'"
                        name="password"
                        label="Password"
                        type="password"
                        placeholder="Enter your password"
                    />

                    <InputField 
                        v-if="props.pageType === 'register'"
                        name="password_confirmation"
                        label="Password Confirmation"
                        type="text"
                        placeholder="Enter your password confirmation"
                    />

                    <!-- Bagian Forgot Password -->
                    <div class="text-right mt-1 mb-6" v-if="props.pageType === 'login'">
                        <a @click.prevent="handleForgotPassword" href="#" class="text-sm text-[#f0a24f] hover:underline">Forgot Password</a>
                    </div>

                    <!-- Bagian Submit -->
                    <button
                        type="submit"
                        class="w-full py-3 mt-4 bg-[#f0a24f] text-white font-semibold rounded-lg hover:bg-[##FFE8CF] focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors"
                    >
                        {{ submitButtonText }}
                    </button>

                    <p class="mt-8 text-center text-sm text-gray-600" v-if="props.pageType !== 'emailInput'">
                        {{ alternateActionText }}
                        <a @click.prevent="handleAlternateAction" href="#" class="font-semibold text-[#f0a24f] hover:underline">{{ alternateActionLinkText }}</a>
                    </p>
                </Form>
            </div>
        </div>
    </div>
</template>