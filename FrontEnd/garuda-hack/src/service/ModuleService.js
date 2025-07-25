import apiClient from "./api";

export default{
    getModulesAndStreak(){
        return apiClient.get('/module');
    },
    getQuestion(moduleId, typeId){
        return apiClient.get('/question/' + moduleId + '/' + typeId);
    },
    askAi(questionData){
        return apiClient.post('/ask-ai-feedback', questionData);
    },
    checkAnswer(data){
        return apiClient.post('/check-answer', data);
    },
    finishAnswer(data){
        return apiClient.post('/finish-module', data);
    }
}