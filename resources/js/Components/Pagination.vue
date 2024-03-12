<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps(['data','search']);
</script>


<template>
    <div v-if=" data.links != null" class="flex flex-row items-center justify-center  mt-2 text-2xl text-white ">
        
        <a
            v-for="(link, k) in props.data.links"
            :key="k"
            class=" items-center gap-2 px-6 py-3 font-sans font-bold text-center  uppercase  transition-all rounded-full select-none hover:bg-gray-800 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            :class="{'bg-blue-500 text-white': link.active}, {'pointer-events-none disabled  opacity-10 ' : link.url == null}"
            :href="link.url + '&search=' + search??''"
            v-html="link.label"
        ></a>

    </div>
</template>



