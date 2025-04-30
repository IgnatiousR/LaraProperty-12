<script setup>
defineProps({
    listing: Object,
    })
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <span>
        {{ listing.city }}, {{ listing.address }}
    </span>
</template>
