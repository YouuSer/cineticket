<script lang="ts" setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Bookmark from "../Components/Icons/Bookmark.vue";
import Ticket from "../Components/Icons/Ticket.vue";
import Play from "../Components/Icons/Play.vue";
import Home from "../Components/Icons/Home.vue";

const props = defineProps({
    movie: Object
})
</script>

<template>
    <Head :title="movie.title"/>
    <div class="relative flex flex-col items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0 dark:text-white">
        <Link :href="route('movie.index')">
            <Home width="2em" height="2em"/>
        </Link>
        <div>
            <div class="text-center">
                <h1 class="text-3xl font-bold font-permanent-marker my-6">{{ movie.title }}</h1>
                <div class="flex justify-around">
                    <Bookmark width="2em" height="2em"/>
                    <Play width="2em" height="2em"/>
                    <Ticket width="2em" height="2em"/>
                </div>
            </div>
        </div>
    </div>
</template>
