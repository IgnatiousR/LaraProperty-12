<script setup>
import ListingAddress from '@/Components/ListingAddress.vue';
import ListingSpace from '@/Components/ListingSpace.vue';
import Price from '@/Components/Price.vue';
import Box from '@/Components/UI/Box.vue';
import { Link } from '@inertiajs/vue3'
defineProps({
    listings: Array,
    })
</script>

<template>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
        <Box v-for="listing in listings" :key="listing.id">
            <!-- <div>
                <img src="/storage/imgs/a1.jpg" class="container">
            </div> -->
            <div>
                <Link :href="`/listing/${listing.id}`">
                    <!-- {{ listing.id }}. {{ listing.city }} -->
                    <Price :price="listing.price" class="text-2xl font-bold"/>
                    <ListingSpace :listing="listing" class="text-lg"/>
                    <ListingAddress :listing="listing" class="text-gray-500"/>
                </Link>
            </div>

            <div>
                <Link :href="`/listing/${ listing.id }/edit`">Edit</Link>
            </div>
            <div>
                <Link :href="`/listing/${listing.id}/`" method="delete">Delete</Link>
            </div>

        </Box>
    </div>
</template>

