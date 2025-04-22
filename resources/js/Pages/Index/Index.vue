<script setup>
    import { Link } from '@inertiajs/vue3'
    import { ref } from "vue";

     defineProps({
        message: String
    })
</script>

<template>
        <div>Home</div>
        <div>The message is "{{ message }}"</div>
</template>
