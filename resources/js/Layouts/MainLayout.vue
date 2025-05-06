<script setup>
    import { Link, usePage } from '@inertiajs/vue3'
    import { computed } from 'vue'

    const page = usePage()
    const flashSuccess = computed(() => page.props.flash.success)
</script>

<template>
    <header class="border-b border-gray-200 dark:border-gray-700 w-full shadow-md">
        <div class="container mx-auto">
            <nav class="p-4 flex items-center justify-between">
                <Link href="/listing" class="text-lg font-medium hover:underline">Listings</Link>
                <h1 class="text-lg font-bold dark:text-emerald-300 text-emerald-600 ">LaraProperty</h1>
                <Link href="/listing/create" class="font-light text-white p-2 md:px-4 md:py-2 rounded bg-emerald-500 hover:bg-emerald-400 ">Create Listing</Link>
            </nav>
        </div>
    </header>

    <main class="container mx-auto p-4 w-full">
        <div v-if="flashSuccess" class="mb-4 p-2 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-800">
            {{ flashSuccess }}
        </div>
        <slot>Default</slot>
    </main>
</template>
