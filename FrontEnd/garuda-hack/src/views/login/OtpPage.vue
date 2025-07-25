<script setup>
import OtpInput from '@/components/input/OtpInput.vue';
import { config } from '../../config.js';
import { useRoute, useRouter } from 'vue-router';
import { Form } from 'vee-validate';
import * as yup from 'yup';
import Swal from 'sweetalert2';
import AuthService from '@/service/AuthService.js';
import ForgotPassword from './ForgotPassword.vue';
import BgLogin from '../../assets/img/bg_login.png';
import ImgForm from '../../assets/img/image_form.png';

const router = useRouter();
const route = useRoute();

const handleResendOtp = async () => {
    try {
        Swal.fire({
            icon: 'success',
            title: 'OTP Resent!',
            text: 'A new OTP has been sent to your registered email.'
        });
    } catch (error) {
        Swal.fire({
            icon: 'error',
            title: 'Failed',
            text: 'Could not resend OTP. Please try again.'
        });
    }
};

const schema = yup.object({
    otp: yup.string().length(6, 'OTP must be 6 digits').required('OTP is required')
});

const onSubmit = async (values) => {
    Swal.fire({
        icon: 'info',
        title: 'Verifying...',
        text: 'Please wait while we verify your OTP.',
        showConfirmButton: false,
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    try {
        if (route.query.from === 'forgot-password') {
            await AuthService.verifyOtp({
                email: route.query.email,
                otp: values.otp,
            });
        } else {
            await AuthService.requestOtp({
                email: route.query.email,
                otp: values.otp,
            });
        }

        Swal.fire({
            icon: 'success',
            title: 'Verification Successful!',
            text: 'Your account has been verified.',
        }).then(() => {
            if (route.query.from === 'forgot-password') {
                router.push({
                    path: '/forgot-password',
                    query: {
                        email: route.query.email,
                        otp: values.otp
                    }
                });
            } else {
                router.push('/login');
            }
        });
    } catch (error) {
        console.log('OTP Verification Error:', error.response?.data || error.message);
        Swal.fire({
            icon: 'error',
            title: 'Verification Failed',
            text: 'The OTP you entered is incorrect or has expired. Please try again.'
        });
    }
};

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
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold text-gray-800">Verify With OTP</h2>
                        <p class="text-gray-600 mt-2">
                            To ensure your security, please enter the 6-digit code we sent to your registered email.
                        </p>
                    </div>

                    <OtpInput 
                        name="otp"
                        :digitCount="6"
                        class="mb-4"
                    />

                    <p class="mt-8 text-center text-sm text-gray-600">
                        Didn't receive the OTP?
                        <a @click.prevent="handleResendOtp" href="#" class="font-semibold text-[#f0a24f] hover:underline">Resend</a>
                    </p>

                    <button
                        type="submit"
                        class="w-full py-3 mt-4 bg-[#f0a24f] text-white font-semibold rounded-lg hover:bg-[#eac585] focus:outline-none focus:ring-2 focus:ring-[#f59e0b] focus:ring-offset-2 transition-colors"
                    >
                        Verify OTP
                    </button>
                </Form>
            </div>
        </div>
    </div>
</template>