import { createRouter, createWebHistory } from 'vue-router'
import DashboardApp from '../layout/DashboardApp.vue'

const routes = [
  {
    path: '/',
    redirect: '/login',
  },
  {
    path: '/HomePage',
    name: 'HomePage',
    meta: { layout : DashboardApp },
    component: () => import('../views/HomeApp.vue'),
  },
  {
    path: '/LearningPage',
    name: 'LearningPage',
    meta: { layout : DashboardApp },
    component: () => import('../views/LearningPage.vue'),
  },
  {
    path: '/login',
    name: 'Login',
    component: () => import('../views/login/LoginRegistPage.vue'),
    props: { pageType: 'login' },
  },
  {
    path: '/register',
    name: 'Register',
    component: () => import('../views/login/LoginRegistPage.vue'),
    props: { pageType: 'register' },
  },
  {
    path: '/emailInput',
    name: 'EmailInput',
    component: () => import('../views/login/LoginRegistPage.vue'),
    props: {pageType: 'emailInput'}
  },
  {
    path: '/profile',
    name: 'Profile',
    meta: { layout : DashboardApp },
    component: () => import('../views/ProfilePage.vue'),
  },
  {
    path: '/otp',
    name: 'OtpPage',
    component: () => import('../views/login/OtpPage.vue'),
  },
  {
    path: '/forgot-password',
    name: 'ForgotPassword',
    component: () => import('../views/login/ForgotPassword.vue'),
  },
  {
    path: '/quiz/:moduleId/:typeId',
    name: 'QuizPage',
    meta: { layout : DashboardApp },
    component: () => import('../views/QuizPage.vue'),
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
