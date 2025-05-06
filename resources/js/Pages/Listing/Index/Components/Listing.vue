<script setup>
import ListingAddress from '@/Components/ListingAddress.vue';
import ListingSpace from '@/Components/ListingSpace.vue';
import Price from '@/Components/Price.vue';
import Box from '@/Components/UI/Box.vue';
import { Link } from '@inertiajs/vue3';
import {useMonthlyPayment} from '@/Composables/useMonthlyPayment';

const prop = defineProps({
    listing:Object,
})

const {monthlyPayment} = useMonthlyPayment(prop.listing.price, 2.5, 25)
</script>

<template>
    <Box>
            <!-- <div>
                <img src="/storage/imgs/a1.jpg" class="container">
            </div> -->
            <div>
                <Link :href="`/listing/${listing.id}`">
                    <div class="flex items-center gap-2">
                        <Price :price="listing.price" class="text-2xl font-bold"/>
                        <div class="text-xs text-gray-500">
                            <Price :price="monthlyPayment"/>pm
                        </div>
                    </div>
                    <!-- {{ listing.id }}. {{ listing.city }} -->
                    <ListingSpace :listing="listing" class="text-lg"/>
                    <ListingAddress :listing="listing" class="text-gray-500"/>
                </Link>
            </div>

            <!-- <div>
                <Link :href="`/listing/${ listing.id }/edit`">Edit</Link>
            </div>
            <div>
                <Link :href="`/listing/${listing.id}/`" method="delete">Delete</Link>
            </div> -->
        </Box>
</template>
