<script lang="ts" setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    intheater: Object,
    upcoming: Object,
})
</script>

<template>
    <Head title="Home" />

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</Link>
            </template>
        </div>

        <div class="flex dark:text-white">
            <div class="mx-12">
                <h1 class="text-2xl my-4 uppercase font-semibold">In theater</h1>
                <ul v-for="movie in intheater" :key="movie.id">
                    <li>
                        <Link :href="route('movie.show', movie.id)">{{ movie.title }}</Link>
                    </li>
                </ul>
            </div>
            <div class="mx-12">
                <h1 class="text-2xl my-4 uppercase font-semibold">Upcoming</h1>
                <ul v-for="movie in upcoming" :key="movie.id">
                    <li>
                        <Link :href="route('movie.show', movie.id)">{{ movie.title }}</Link>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
