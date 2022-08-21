<script setup>
import {Link} from '@inertiajs/inertia-vue3';
import {Vue3Lottie} from "vue3-lottie";
import Panda from "../Components/Lottie/panda.json";
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <Link href="/">
                <Vue3Lottie :animationData="Panda" :loop="false" class="w-1/2 mx-auto"/>
            </Link>
        </div>

        <div class="w-full sm:max-w-md  px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot/>
        </div>
    </div>
</template>
