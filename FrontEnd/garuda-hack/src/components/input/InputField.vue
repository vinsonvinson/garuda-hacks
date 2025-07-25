<script setup>
import { ErrorMessage, useField } from 'vee-validate';

const props = defineProps({
    name: {
        type: String,
        required: true
    },
    label: {
        type: String,
        default: ''
    },
    type: {
        type: String,
        default: 'text'
    },
    placeholder: {
        type: String,
        default: ''
    },
    initialValue: {
        type: [String, Number],
        default: ''
    }
});

const { value, errorMessage } = useField(props.name, 'required');
</script>

<template>
    <div class="form-group">
        <label :for="name">{{ label }}</label>
        <input 
        :id="name"
        :name="name"
        :type="type"
        :placeholder="placeholder"
        v-model="value"
        class="form-input"
        :class="{ 'is-invalid': !!ErrorMessage }"
        />
        <p v-if="ErrorMessage" class="error-message">{{ errorMessage }}</p>
    </div>
</template>

<style>
.form-group{
    margin-bottom: 1.75rem;
    position: relative;
}

label{
    display: block;
    font-size: 0.9rem;
    color: #6c757d;
    margin-bottom: 0.5rem;
}

.form-input{
    width: 100%;
    border: none;
    border-bottom: 1px solid #ced4da;
    padding: 8px 0;
    font-size: 1rem;
    background-color: transparent;
    transition: border-color 0.3s ease;
}

.form-input:focus{
    outline: none;
    border-color: #007bff;
}

.form-input.is-invalid{
    border-color: #dc3545;
}

.error-message{
    color: #dc3545;
    font-size: 0.8rem;
    position: absolute;
    bottom: -22px;
    left: 0;
    margin: 0;
}

</style>