import { defineStore } from 'pinia';

export const useAuthStore = defineStore('auth', {
    state: () => ({
        token: null,
    }),
    actions: {
        setToken(newToken){
            this.token = newToken;
        },
    }
})