<script setup>
defineProps({
    value: String,
});
</script>

<template>
    <label class="block font-sm text-2xl text-gray-800 mt-5 ml-5 leading-4">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
