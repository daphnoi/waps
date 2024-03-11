<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps(['data']);
</script>


<template>
    <div v-if="props.data.links.length > 3 && data.links != null" class="flex flex-row items-center justify-center  mt-2 text-2xl text-white ">
        <Link
            v-for="(link, k) in props.data.links"
            :key="k"
            class=" items-center gap-2 px-6 py-3 font-sans font-bold text-center  uppercase  transition-all rounded-full select-none hover:bg-gray-800 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            :class="{'bg-blue-500 text-white': link.active}"
            :href="link.url"
            v-html="link.label"
        ></Link>

    </div>
</template>

