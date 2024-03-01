<script setup>
import Modal from './Modal.vue';

const emit = defineEmits(['close']);

defineProps({
    show: {
        type: Boolean,
        default: false,
    },
    maxWidth: {
        type: String,
        default: '2xl',
    },
    closeable: {
        type: Boolean,
        default: true,
    },
});

const close = () => {
    emit('close');
};
</script>

<template>
    <Modal
        :show="show"
        :max-width="maxWidth"
        :closeable="closeable"
        @close="close"
    >
        <div class="px-6 py-4 items:center justify-center mt-4 mb-4 bg-white">
            <div class="text-5xl text-center font-medium text-blue-900 uppercase ">
                <slot name="title" />
            </div>

            <div class="mt-4 text-2xl text-white  ">
                <slot name="content" />
            </div>
        </div>

        <div class="flex flex-row justify-end  bg-gray-100 text-end mt-8 mb-9 mr-6">
            <slot name="footer" />
        </div>
    </Modal>
</template>
