<script setup>
import {useForm} from '@inertiajs/vue3'

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
                <label for="first_name" class="label">first_name</label>
                <input id="first_name" type="first_name" class="input" v-model="form.first_name" placeholder="First Name"/>
                <div class="input-error" v-if="form.errors.first_name">{{ form.errors.first_name }}</div>
            </div>

            <div>
                <label for="last_name" class="label">last_name</label>
                <input id="last_name" type="last_name" class="input" v-model="form.last_name" placeholder="Last Name"/>
                <div class="input-error" v-if="form.errors.last_name">{{ form.errors.last_name }}</div>
            </div>

            <div>
                <label for="email" class="label">Email</label>
                <input id="email" type="email" class="input" v-model="form.email" placeholder="name@.com"/>
                <div class="input-error" v-if="form.errors.email">{{ form.errors.email }}</div>
            </div>

            <div class="mt-4">
                <label for="password" class="label">Password</label>
                <input id="password" type="password" class="input" v-model="form.password"/>
                <div class="input-error" v-if="form.errors.password">{{ form.errors.password }}</div>
            </div>

            <div class="mt-4">
                <label for="password_confirmation" class="label">ReEnter Password</label>
                <input id="password_confirmation" type="password_confirmation" class="input" v-model="form.password_confirmation"/>
                <div class="input-error" v-if="form.errors.password_confirmation">{{ form.errors.password_confirmation }}</div>
            </div>

            <div class="mt-4">
                <button class="button w-full" type="submit">Register</button>
            </div>
        </div>
    </form>
</template>

