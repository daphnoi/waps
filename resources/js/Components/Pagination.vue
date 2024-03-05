<template>
    <nav aria-label="Page navigation">
      <ul class="flex items-center mt-10 h-10 text-base justify-center text-[4vh] font-bold  ">
        <!-- Previous page link -->
        <li v-if="currentPage > 1">
          <a href="#" @click.prevent="changePage(currentPage - 1)">
            <span class="sr-only">Previous</span>
            <svg class="w-3 h-3 rtl:rotate-180 h-[20vh]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
          </a>
        </li>
  
        <!-- Display pagination links -->
        <li v-for="pageNumber in totalPages" :key="pageNumber">
          <a href="#" @click.prevent="changePage(pageNumber)" :class="{ 'text-blue-600': pageNumber === currentPage }">
            {{ pageNumber }}
          </a>
        </li>
  
        <!-- Next page link -->
        <li v-if="currentPage < totalPages">
          <a href="#" @click.prevent="changePage(currentPage + 1)">
            <span class="sr-only">Next</span>
            <svg class="w-3 h-3 h-[20vh]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
          </a>
        </li>
      </ul>
    </nav>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  // Props
  const currentPage = ref(1); 
  const totalPages = ref(5); 
  
  // Method to change the current page
  const changePage = (page) => {
    currentPage.value = page;
  
  };
  </script>
  
  <style scoped>

  </style>
  