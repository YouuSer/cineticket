<script lang="ts" setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    movie: Object
})
</script>

<template>
    <Head :title="movie.title"/>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="text-center text-white">
            <h1 class="text-3xl font-bold uppercase">{{ movie.title }}</h1>
            <small>
                <Link :href="route('movie.index')">Home</Link>
            </small>
        </div>
    </div>
</template>
