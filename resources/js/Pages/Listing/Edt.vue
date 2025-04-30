<script setup>
import {useForm} from '@inertiajs/vue3'

const props = defineProps({
    listing: Object,
})

const form  = useForm({
    beds: props.listing.beds,
    baths: props.listing.baths,
    area:props.listing.area,
    city: props.listing.city,
    address: props.listing.address,
    postal_code: props.listing.postal_code,
    price:props.listing.price,
})

const update = () => form.put(`/listing/${props.listing.id}`)

</script>

<template>
    <h2>Edit the Property Lisiting</h2>
    <form @submit.prevent="update">
        <div>
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
                <button type="submit">Edit</button>
            </div>
        </div>
    </form>
</template>
