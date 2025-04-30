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
        <div>
            <!-- <InputField label="Bads" :form="form.beds" :form_error="form.errors.beds"/> -->
            <!-- <div>
                <label>Beds</label>
                <input type="number" v-model.number="form.beds"/>
                <div v-if="form.errors.beds">{{ form.errors.beds }}</div>
            </div> -->

            <div>
                <label>Beds</label>
                <input type="number" v-model.number="form.beds"/>
                <div v-if="form.errors.beds">{{ form.errors.beds }}</div>
            </div>

            <div>
                <label>Baths</label>
                <input v-model.number="form.baths" type="number"/>
                <div v-if="form.errors.baths">{{ form.errors.baths }}</div>
            </div>

            <div>
                <label>Area</label>
                <input v-model.number="form.area" type="number"/>
                <div v-if="form.errors.area">{{ form.errors.area }}</div>
            </div>

            <div>
                <label>City</label>
                <input v-model="form.city" type="text"/>
                <div v-if="form.errors.city">{{ form.errors.city }}</div>
            </div>

            <div>
                <label>Postal Code</label>
                <input v-model.number="form.postal_code" type="number"/>
                <div v-if="form.errors.postal_code">{{ form.errors.postal_code }}</div>
            </div>

            <div>
                <label>Address</label>
                <input v-model="form.address" type="text"/>
                <div v-if="form.errors.address">{{ form.errors.address }}</div>
            </div>

            <div>
                <label>Price</label>
                <input v-model.number="form.price" type="number"/>
                <div v-if="form.errors.price">{{ form.errors.price }}</div>
            </div>

            <div>
                <button type="submit">Create</button>
            </div>
        </div>
    </form>
</template>
