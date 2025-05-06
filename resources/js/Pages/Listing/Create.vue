<script setup>
import {reactive} from 'vue'
import {useForm} from '@inertiajs/vue3'
import InputField from '@/Components/InputField.vue'

const form  = useForm({
    beds: 0,
    baths: 0,
    area:0,
    city: null,
    address: null,
    postal_code: 0,
    price:0,
})

const create = () => form.post('/listing')

</script>

<template>
    <h2>Create a Property Lisiting</h2>
    <form @submit.prevent="create">
        <div class="grid grid-cols-6 gap-4">
            <div class="col-span-2">
                <label class="label">Beds</label>
                <input type="number" v-model.number="form.beds" class="input"/>
                <div v-if="form.errors.beds" class="input-error">{{ form.errors.beds }}</div>
            </div>

            <div class="col-span-2">
                <label class="label">Baths</label>
                <input v-model.number="form.baths" type="number" class="input"/>
                <div v-if="form.errors.baths" class="input-error">{{ form.errors.baths }}</div>
            </div>

            <div class="col-span-2">
                <label class="label">Area</label>
                <input v-model.number="form.area" type="number" class="input"/>
                <div v-if="form.errors.area" class="input-error">{{ form.errors.area }}</div>
            </div>

            <div class="col-span-4">
                <label class="label">City</label>
                <input v-model="form.city" type="text" class="input"/>
                <div v-if="form.errors.city" class="input-error">{{ form.errors.city }}</div>
            </div>

            <div class="col-span-2">
                <label class="label">Postal Code</label>
                <input v-model.number="form.postal_code" type="number" class="input"/>
                <div v-if="form.errors.postal_code" class="input-error">{{ form.errors.postal_code }}</div>
            </div>

            <div class="col-span-6">
                <label class="label">Address</label>
                <input v-model="form.address" type="text" class="input"/>
                <div v-if="form.errors.address" class="input-error">{{ form.errors.address }}</div>
            </div>

            <div class="col-span-6">
                <label class="label">Price</label>
                <input v-model.number="form.price" type="number" class="input"/>
                <div v-if="form.errors.price" class="input-error">{{ form.errors.price }}</div>
            </div>

            <div class="col-span-6">
                <button type="submit" class="button">Create</button>
            </div>
        </div>
    </form>
</template>
