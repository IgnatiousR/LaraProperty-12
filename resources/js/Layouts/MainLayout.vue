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
                <h1 class="text-lg font-bold dark:text-orange-300 text-orange-600 ">Larazillow</h1>
                <Link href="/listing/create" class="text-white px-4 py-2 rounded bg-orange-600 hover:bg-orange-700 ">Create Listing</Link>
            </nav>
        </div>
    </header>

    <main class="container mx-auto p-4">
        <div v-if="flashSuccess" class="mb-4 p-2 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-800">
            {{ flashSuccess }}
        </div>
        <slot>Default</slot>
    </main>
</template>
