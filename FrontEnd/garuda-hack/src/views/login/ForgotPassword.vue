<script setup>
import { Form } from 'vee-validate';
import * as yup from 'yup';
import InputField from '@/components/input/InputField.vue';
import {config} from '../../config.js';
import { useRoute, useRouter } from 'vue-router';
import Swal from 'sweetalert2';
import AuthService from '@/service/AuthService.js';
import BgLogin from '../../assets/img/bg_login.png';
import ImgForm from '../../assets/img/image_form.png';

const route = useRoute();
const router = useRouter();

const schema = yup.object({
    newPassword: yup.string().min(8, 'Password must be at least 8 characters').required('New password is required'),
    confirmPassword: yup.string()
        .oneOf([yup.ref('newPassword')], 'Passwords must match') // Pastikan sama dengan newPassword
        .required('Password confirmation is required')
});

const onSubmit = async (values) => {

    Swal.fire({
        title: 'Updating Password...',
        text: 'Please wait while we update your password.',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });
    try {
        const email = route.query.email;
        const otp = route.query.otp; 

        await AuthService.resetPassword({
            email, 
            otp, 
            password: values.newPassword
        });
        Swal.fire({
            icon: 'success',
            title: 'Password Updated!',
            text: 'Your password has been successfully updated.',
        }).then(() => {
            router.push('/login'); 
        });
    } catch (error) {
        Swal.fire({
            icon: 'error',
            title: 'Update Failed',
            text: error.response?.data?.message || 'We could not update your password. Please try again.'
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
                        <h2 class="text-3xl font-bold text-gray-800">Reset Password</h2>
                    </div>

                    <InputField 
                        name="newPassword"
                        label="New Password"
                        type="password"
                        placeholder="Enter your new password"
                    />

                    <InputField 
                        name="confirmPassword"
                        label="Confirm Password"
                        type="password"
                        placeholder="Confirm your new password"
                    />

                    <button
                        type="submit"
                        class="w-full py-3 mt-4 bg-[#f0a24f] text-white font-semibold rounded-lg hover:bg-[#eac585] focus:outline-none focus:ring-2 focus:ring-[#f59e0b] focus:ring-offset-2 transition-colors"
                    >
                        Update Password
                    </button>
                </Form>
            </div>
        </div>
    </div>
</template>