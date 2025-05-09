<script setup>
    import { Link, usePage } from '@inertiajs/vue3'
    import { computed } from 'vue'

    const page = usePage()
    const flashSuccess = computed(() => page.props.flash.success)
    const user = computed(()=> page.props.user)
</script>

<template>
    <header class="border-b border-gray-200 dark:border-gray-700 w-full shadow-md">
        <div class="container mx-auto">
            <nav class="p-4 flex items-center justify-between">
                <div>
                    <Link href="/listing" class="text-lg font-medium hover:underline">Listings</Link>
                </div>
                <div>
                    <Link href="/listing" class="text-lg font-bold dark:text-emerald-300 text-emerald-600 ">LaraProperty</Link>
                </div>
                <div class="flex items-center gap-4" v-if="user">
                    <div class="text-sm text-gray-500">{{ user.first_name }}</div>
                    <Link href="/listing/create" class="font-light text-white p-2 md:px-4 md:py-2 rounded bg-emerald-500 hover:bg-emerald-400 ">Create Listing</Link>
                    <Link href="/logout" method="POST" as="button" class="font-light text-white p-2 md:px-4 md:py-2 rounded border border-emerald-500  hover:bg-emerald-400/20 ">Logout</Link>
                </div>
                <div v-else class="flex items-center gap-2">
                    <Link href="/login" class="font-light text-white p-2 md:px-4 md:py-2 rounded border border-emerald-500  hover:bg-emerald-400/20 ">Login</Link>
                    <Link href="/register" class="font-light text-white p-2 md:px-4 md:py-2 rounded bg-emerald-500 hover:bg-emerald-400 ">Register</Link>
                </div>
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
