<template>
    <svg class="cursor-pointer" :width="width" :height="height" viewBox="0 0 24 24"><path fill="currentColor" d="M5 21V5q0-.825.588-1.413Q6.175 3 7 3h10q.825 0 1.413.587Q19 4.175 19 5v16l-7-3Z"></path></svg>
</template>

<script setup lang="ts">
const props = defineProps({
    width: { type: String, required: true},
    height: { type: String, required: true},
})
</script>
