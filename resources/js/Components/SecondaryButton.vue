<script setup>
defineProps({
    type: {
        type: String,
        default: 'button',
    },
});
</script>

<template>
    <button :type="type" class="items-center px-4 py-2 bg-white border border-gray-300 rounded-md text-md text-gray-700 uppercase shadow-lg hover:bg-blue-900 hover:text-white  focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150">
        <slot />
    </button>
</template>
