<script setup>
import {useForm, Link} from '@inertiajs/vue3'

const form = useForm({
    email:null,
    password:null
})

const login = () => form.post('/login')
</script>

<template>
    <form @submit.prevent="login">
        <div class="w-1/2 mx-auto">
            <div>
                <label for="email" class="label">Email</label>
                <input id="email" type="email" class="input" v-model="form.email" placeholder="Email Address"/>
                <div class="input-error" v-if="form.errors.email">{{ form.errors.email }}</div>
            </div>
            <div class="mt-4">
                <label for="password" class="label">Password</label>
                <input id="password" type="password" class="input" v-model="form.password" placeholder="Password"/>
                <div class="input-error" v-if="form.errors.password">{{ form.errors.password }}</div>
            </div>
            <div class="mt-4">
                <button class="button w-full" type="submit">Login</button>

                <div class="mt-2">
                    <p class="text-gray-400">Don't have an account? <Link href="/register" class="text-emerald-300 hover:underline">Register</Link></p>
                </div>
            </div>
        </div>
    </form>
</template>
