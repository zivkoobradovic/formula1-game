<script setup>
defineProps({
    data: Array,
    topTen: Array,
});
</script>

<template>
    <div class="py-5">
        <a class="p-3 rounded bg-green-400 hover:bg-green-300" :href="route('generate-csv')">Download CSV File</a>
    </div>
    <div class="flex">
        <div class="relative overflow-x-auto rounded-lg mb-10 mr-10 w-1/2">
            <h1 class="text-4xl text-gray-300">Top 10 Players</h1>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-green-700 uppercase bg-gray-50 dark:bg-green-400 dark:text-green-900">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Result
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Code
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-green-800 dark:border-green-700 hover:bg-green-600"
                        v-for="topPlayers in topTen" :key="topPlayers.id">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div>{{ topPlayers.id }}</div>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="mb-3">email: {{ topPlayers.email }}</div>
                            <div class=" w-1/4 mr-auto text-left">Result URL: <a class="font-bold"
                                    :href="route('share-url', topPlayers.slug)">{{
                                        route('share-url', topPlayers.slug)
                                    }}</a></div>
                        </th>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div>{{ topPlayers.result }}</div>

                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ topPlayers.created_at }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ topPlayers.code }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="relative overflow-x-auto rounded-lg mb-10 mr-10 w-1/2">
            <h1 class="text-4xl  text-gray-300">Latest 50 Players</h1>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-purple-700 dark:text-purple-200">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Result
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Code
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-purple-800 dark:border-purple-700 hover:bg-purple-600"
                        v-for="player in data" :key="player.id">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div>{{ player.id }}</div>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="mb-3">email: {{ player.email }}</div>
                            <div class=" w-1/4 mr-auto text-left">Result URL: <a class="font-bold"
                                    :href="route('share-url', player.slug)">{{
                                        route('share-url', player.slug)
                                    }}</a></div>
                        </th>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div>{{ player.result }}</div>

                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ player.created_at }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ player.code }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
