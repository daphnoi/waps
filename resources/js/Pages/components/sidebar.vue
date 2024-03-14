<script setup>
import { ref } from 'vue';

const draw = ref(true);

</script>

<template>
    <aside id="logo-sidebar"
        class="absolute  z-40 w-64 h-screen transition-all delay-400 sm:translate-x-0 ">
        <div class="h-full px-1 pt-5 pb-4 overflow-y-auto bg-gray-200 shadow-lg shadow-r">
            <div class="absolute right-[-20rem] top-[40%] cursor-pointer opacity-90 hover:opacity-90" >
            </div>
            <ul class="space-y-2 text-2xl ml-3">
                <li>
                    <a :href="route('dashboard')" class="flex items-center text-blue-900  font-bold  h-10  group  transition ease-in-out delay-50 hover:scale-[110%] duration-300  hover:bg-shadow-lg">
                        <svg width="512" height="512" viewBox="0 0 512 512" style="color:#1e3a89" xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 "><rect width="479" height="479" x="16.5" y="16.5" rx="17" fill="transparent" stroke="transparent" stroke-width="33" stroke-opacity="74%" paint-order="stroke"></rect><svg width="298px" height="298px" viewBox="0 0 24 24" fill="#1e3a89" x="107" y="107" role="img" style="display:inline-block;vertical-align:middle" xmlns="http://www.w3.org/2000/svg"><g fill="#1e3a89"><path fill="currentColor" d="M20 7h-4V4c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H4c-1.103 0-2 .897-2 2v9a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V9c0-1.103-.897-2-2-2zM4 11h4v8H4v-8zm6-1V4h4v15h-4v-9zm10 9h-4V9h4v10z"/></g></svg></svg>
                        <span>Dashboard</span> 
                    </a>
                </li>
                <li>
                    <a :href="route('projects.index')" class="flex items-center text-blue-900 font-bold  h-10  group transition ease-in-out delay-50 hover:scale-[110%] duration-300  hover:bg-shadow-lg">
                        <svg width="512" height="512" viewBox="0 0 512 512" style="color:#1e3a89" xmlns="http://www.w3.org/2000/svg" class="h-20 w-20"><rect width="479" height="479" x="16.5" y="16.5" rx="17" fill="transparent" stroke="transparent" stroke-width="33" stroke-opacity="74%" paint-order="stroke"></rect><svg width="298px" height="298px" viewBox="0 0 20 20" fill="#1e3a89" x="107" y="107" role="img" style="display:inline-block;vertical-align:middle" xmlns="http://www.w3.org/2000/svg"><g fill="#1e3a89"><g fill="currentColor"><path d="M4 3a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Z"/><path fill-rule="evenodd" d="M3 8h14v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8Zm5 3a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Z" clip-rule="evenodd"/></g></g></svg></svg>
                        <span >Projects</span>
                    </a>
                </li>
                <li>
                    <a href="https://waps.com/user/profile" class="flex items-center text-blue-900  font-bold  h-10 group transition ease-in-out delay-50 hover:scale-[110%] duration-300  hover:bg-shadow-lg">
                        <svg width="512" height="512" viewBox="0 0 512 512" style="color:#1e3a89" xmlns="http://www.w3.org/2000/svg" class="h-20 w-20"><rect width="479" height="479" x="16.5" y="16.5" rx="17" fill="transparent" stroke="transparent" stroke-width="33" stroke-opacity="100%" paint-order="stroke"></rect><svg width="298px" height="298px" viewBox="0 0 36 36" fill="#1e3a89" x="107" y="107" role="img" style="display:inline-block;vertical-align:middle" xmlns="http://www.w3.org/2000/svg"><g fill="#1e3a89"><path fill="currentColor" d="M14.68 14.81a6.76 6.76 0 1 1 6.76-6.75a6.77 6.77 0 0 1-6.76 6.75Zm0-11.51a4.76 4.76 0 1 0 4.76 4.76a4.76 4.76 0 0 0-4.76-4.76Z" class="clr-i-outline clr-i-outline-path-1"/><path fill="currentColor" d="M16.42 31.68A2.14 2.14 0 0 1 15.8 30H4v-5.78a14.81 14.81 0 0 1 11.09-4.68h.72a2.2 2.2 0 0 1 .62-1.85l.12-.11c-.47 0-1-.06-1.46-.06A16.47 16.47 0 0 0 2.2 23.26a1 1 0 0 0-.2.6V30a2 2 0 0 0 2 2h12.7Z" class="clr-i-outline clr-i-outline-path-2"/><path fill="currentColor" d="M26.87 16.29a.37.37 0 0 1 .15 0a.42.42 0 0 0-.15 0Z" class="clr-i-outline clr-i-outline-path-3"/><path fill="currentColor" d="m33.68 23.32l-2-.61a7.21 7.21 0 0 0-.58-1.41l1-1.86A.38.38 0 0 0 32 19l-1.45-1.45a.36.36 0 0 0-.44-.07l-1.84 1a7.15 7.15 0 0 0-1.43-.61l-.61-2a.36.36 0 0 0-.36-.24h-2.05a.36.36 0 0 0-.35.26l-.61 2a7 7 0 0 0-1.44.6l-1.82-1a.35.35 0 0 0-.43.07L17.69 19a.38.38 0 0 0-.06.44l1 1.82a6.77 6.77 0 0 0-.63 1.43l-2 .6a.36.36 0 0 0-.26.35v2.05A.35.35 0 0 0 16 26l2 .61a7 7 0 0 0 .6 1.41l-1 1.91a.36.36 0 0 0 .06.43l1.45 1.45a.38.38 0 0 0 .44.07l1.87-1a7.09 7.09 0 0 0 1.4.57l.6 2a.38.38 0 0 0 .35.26h2.05a.37.37 0 0 0 .35-.26l.61-2.05a6.92 6.92 0 0 0 1.38-.57l1.89 1a.36.36 0 0 0 .43-.07L32 30.4a.35.35 0 0 0 0-.4l-1-1.88a7 7 0 0 0 .58-1.39l2-.61a.36.36 0 0 0 .26-.35v-2.1a.36.36 0 0 0-.16-.35ZM24.85 28a3.34 3.34 0 1 1 3.33-3.33A3.34 3.34 0 0 1 24.85 28Z" class="clr-i-outline clr-i-outline-path-4"/><path fill="none" d="M0 0h36v36H0z"/></g></svg></svg>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center text-blue-900  font-bold  h-10 group transition ease-in-out delay-50 hover:scale-[110%] duration-300  hover:bg-shadow-lg">
                        <svg width="512" height="512" viewBox="0 0 512 512" style="color:#1e3a89" xmlns="http://www.w3.org/2000/svg" class="h-20 w-20"><rect width="479" height="479" x="16.5" y="16.5" rx="17" fill="transparent" stroke="transparent" stroke-width="33" stroke-opacity="74%" paint-order="stroke"></rect><svg width="298px" height="298px" viewBox="0 0 24 24" fill="#1e3a89" x="107" y="107" role="img" style="display:inline-block;vertical-align:middle" xmlns="http://www.w3.org/2000/svg"><g fill="#1e3a89"><path fill="currentColor" d="M20 12c0-.568-.061-1.122-.174-1.656l1.834-1.612l-2-3.464l-2.322.786a7.97 7.97 0 0 0-2.859-1.657L14 2h-4l-.479 2.396a7.97 7.97 0 0 0-2.859 1.657L4.34 5.268l-2 3.464l1.834 1.612a7.993 7.993 0 0 0 0 3.312L2.34 15.268l2 3.464l2.322-.786a7.97 7.97 0 0 0 2.859 1.657L10 22h4l.479-2.396a7.978 7.978 0 0 0 2.859-1.657l2.322.786l2-3.464l-1.834-1.612A8.01 8.01 0 0 0 20 12zm-8 4a4 4 0 1 1 0-8a4 4 0 0 1 0 8z"/></g></svg></svg>
                        <span>Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

</template>