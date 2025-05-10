<script setup>
import {useForm, Link} from '@inertiajs/vue3'

const form = useForm({
    first_name: null,
    last_name: null,
    email:null,
    phone_number:null,
    password:null,
    password_confirmation:null
})

const register = () => form.post('/register')
</script>

<template>
    <form @submit.prevent="register">
        <div class="w-1/2 mx-auto">
            <div>
                <label for="first_name" class="label">First Name</label>
                <input id="first_name" type="first_name" class="input" v-model="form.first_name" placeholder="First Name"/>
                <div class="input-error" v-if="form.errors.first_name">{{ form.errors.first_name }}</div>
            </div>

            <div>
                <label for="last_name" class="label">Last Name</label>
                <input id="last_name" type="last_name" class="input" v-model="form.last_name" placeholder="Last Name"/>
                <div class="input-error" v-if="form.errors.last_name">{{ form.errors.last_name }}</div>
            </div>

            <div>
                <label for="email" class="label">Email</label>
                <input id="email" type="email" class="input" v-model="form.email" placeholder="Email"/>
                <div class="input-error" v-if="form.errors.email">{{ form.errors.email }}</div>
            </div>

            <div>
                <label for="phone_number" class="label">Phone Number (Optional)</label>
                <input id="phone_number" type="text" class="input" v-model="form.phone_number" placeholder="Phone Number"/>
                <div class="input-error" v-if="form.errors.phone_number">{{ form.errors.phone_number }}</div>
            </div>

            <div class="mt-4">
                <label for="password" class="label">Password</label>
                <input id="password" type="password" class="input" v-model="form.password" placeholder="Password"/>
                <div class="input-error" v-if="form.errors.password">{{ form.errors.password }}</div>
            </div>

            <div class="mt-4">
                <label for="password_confirmation" class="label">Re-enter Password</label>
                <input id="password_confirmation" type="password" class="input" v-model="form.password_confirmation" placeholder="Re-enter Password"/>
                <div class="input-error" v-if="form.errors.password_confirmation">{{ form.errors.password_confirmation }}</div>
            </div>

            <div class="mt-4">
                <button class="button w-full" type="submit">Register</button>

                <div class="mt-2">
                    <p class="text-gray-400">Already have an account? <Link href="/login" class="text-emerald-300 hover:underline">Login</Link></p>
                </div>
            </div>
        </div>
    </form>
</template>

