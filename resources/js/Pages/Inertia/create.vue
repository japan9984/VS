<script setup>
    import { reactive } from 'vue';
    import { Inertia } from '@inertiajs/inertia';
    import TextInput from '@/Components/TextInput.vue';

    const form = reactive({
        title: null,
        content: null,
    })

    const submitFunction = () => {
        Inertia.post('/inertia', form)
    }
</script>
<template>
    <form @submit.prevent="submitFunction">
        <input name="title" v-model="form.title" type="text"><br>
        <div v-if="errors.title">{{ errors.title }}</div>
        <input name="content" v-model="form.content" type="text"><br>
        <div v-if="errors.content">{{ errors.content }}</div>
        <button>送信</button>
    </form>
</template>
