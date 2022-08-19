<template>
    <svg class="cursor-pointer" :width="width" :height="height" viewBox="0 0 24 24"><path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3L2 12h3v8h5z"></path></svg>
</template>

<script setup lang="ts">
const props = defineProps({
    width: { type: String, required: true},
    height: { type: String, required: true},
})
</script>
