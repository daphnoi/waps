<script setup>
import { onMounted, ref } from 'vue';

defineProps({
    modelValue: String,
});

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        ref="input"
        class="ml-3  border-gray-200 w-[30vmin]  focus:border-white focus:ring-orange-500 rounded-md shadow-xl"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
    >
</template>
