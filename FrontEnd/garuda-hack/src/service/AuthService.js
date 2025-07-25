import apiClient from './api';

export default {
  register(userData) {
    return apiClient.post('/register', userData);
  },
  requestOtp(emailData){
    return apiClient.post('/user-verification', emailData);
  },
  requestLogin(userData){
    return apiClient.post('/login', userData);
  },
  requestForgotPassword(emailData){
    return apiClient.post('/forgot-password', emailData);
  },
  verifyOtp(data){
    return apiClient.post('/check-otp', data);
  },
  resetPassword(data){
    return apiClient.post('/reset-password', data);
  },
  getProfile() {
    return apiClient.get('/profile');
  },
};