<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
defineProps({
    data: Array,
    topTen: Array,
});
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <!-- max-w-7xl -->
            <div class="mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden sm:rounded-lg">
                    <Welcome :data='data' :topTen="topTen"/>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
