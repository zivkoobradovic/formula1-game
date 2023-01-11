<script setup>

defineProps({
    data: Array,
    title: String,
});
</script>

<template>

    <AppLayout>
        <Head :title="title" />
        <h1 class="bg-green-400 p-5">test</h1>
    </AppLayout>
</template>
