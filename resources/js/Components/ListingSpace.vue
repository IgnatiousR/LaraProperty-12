<script setup>
defineProps({
    listing: Object,
    })
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <div>
        <svg class="inline fill-gray-800 dark:fill-gray-300" width="24" height="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 14 14"><path d="M4.3 7c.827 0 1.5-.673 1.5-1.5S5.127 4 4.3 4s-1.5.673-1.5 1.5S3.473 7 4.3 7Zm6.6-2.4H6.7a.3.3 0 0 0-.3.3v2.7H2.2V3.7a.3.3 0 0 0-.3-.3h-.6a.3.3 0 0 0-.3.3v6.6a.3.3 0 0 0 .3.3h.6a.3.3 0 0 0 .3-.3v-.9h9.6v.9a.3.3 0 0 0 .3.3h.6a.3.3 0 0 0 .3-.3V6.7a2.1 2.1 0 0 0-2.1-2.1Z"/></svg>
        &nbsp;<span class="font-bold">{{ listing.beds }}</span> bds
        <span class="text-gray-300"> | </span>
        <span class="font-bold">{{ listing.baths }}</span> baths
        <span class="text-gray-300"> | </span>
        <span class="font-bold">{{ listing.area }}</span> m²
    </div>
</template>
