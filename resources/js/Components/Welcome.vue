<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Listing from '@/Components/Listing.vue';
defineProps({
    data: Array,
    topTen: Array,
});
</script>

<template>
    <listing :data='data' :topTen="topTen"/>
</template>
