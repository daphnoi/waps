<script setup>
import { computed, useSlots } from 'vue';
import SectionTitle from './SectionTitle.vue';

defineEmits(['submitted']);

const hasActions = computed(() => !! useSlots().actions);
</script>

<template>
    <div class="md:grid md:grid-cols-3 md:gap-6 w-[70vh] ">
        <SectionTitle>
            <template #title>
                <slot name="title" />
            </template>
            <template #description>
                <slot name="description" />
            </template>
        </SectionTitle>

        <div class="mt-5 md:mt-0 md:col-span-2 shadow-lg ">
            
            <form @submit.prevent="$emit('submitted')">
                <div
                    class="bg-white sm:p-6 shadow "
                    :class="hasActions ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md'">
                    <div class="grid grid-cols-6 gap-2 h-[24vh] w-[50vh] ml-8">
                        <slot name="form" />
                    </div>
                </div>

                <div v-if="hasActions" class="flex items-center justify-end bg-white shadow-lg ">
                    <slot name="actions" />
                </div>
            </form>
        </div>
    </div>
</template>
