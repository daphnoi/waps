<script setup>
import { ref, inject } from 'vue';
import { useForm, usePage, router} from '@inertiajs/vue3';

const props = defineProps([
    "Projects"
])  


const currentPage = ref(1);
const totalPages = 5; 

const $inertia = inject('$inertia');

const itemform = useForm({
    name: "",
    description: "",
    project_id:"",
})

function prevPage() {
  if (currentPage.value > 1) {
    currentPage.value--;
    fetchItems(currentPage.value);
  }
}

function nextPage() {
  if (currentPage.value < totalPages) {
    currentPage.value++;
    fetchItems(currentPage.value);
  }
}

function gotoPage() {
  currentPage.value = page;
  fetchItems(page);
}

async function fetchItems() {
  try {
    const response = await $inertia.get(route('projects.index', { page: page }));
  } catch (error) {
    console.error('Error fetching items:', error);
  }
}

</script>

<template>
  <div class="flex flex-col items-center mt-6 text-2xl">
    <div class="flex items-center gap-4">
      <button @click="prevPage" :disabled="currentPage === 1"
        class="flex items-center gap-2 px-6 py-3 font-sans font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-full select-none hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        type="button">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
          aria-hidden="true" class="w-4 h-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
        </svg>
        Previous
      </button>
      <div class="flex items-center gap-2">
        <button v-for="(page, index) in Projects" :key="index"
          :class="{ 'bg-gray-900 text-white': currentPage === page, 'text-gray-900': currentPage !== page }"
          @click="gotoPage(page)"
          class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-full text-center align-middle font-sans font-medium uppercase shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
          type="button">
          <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">{{ page }}</span>
        </button>
      </div>
      <button @click="nextPage" :disabled="currentPage === totalPages"
        class="flex items-center gap-2 px-6 py-3 font-sans font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-full select-none hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        type="button">
        Next
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
          aria-hidden="true" class="w-4 h-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
        </svg>
      </button>
    </div>
  </div>
</template>

