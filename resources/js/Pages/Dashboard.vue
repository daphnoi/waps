<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import sidebar from './components/sidebar.vue';
import { onMounted, ref, withDirectives } from 'vue';
import { usePage, router } from '@inertiajs/vue3';
import { defineProps } from 'vue';
import moment from 'moment';

const props = defineProps([
    "Projects",
])
const converttimedate = (time) => {
    return moment(time).format('MMMM Do YYYY, h:mm:ss a');
}


</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
        </template>
        <sidebar />
        <div class=" h-[100vmin]">
            <div class=" mx-auto py-5 sm:px-6 lg:px-9">
                <div class="justify-between mx-auto mr-11">
                     <h5 class="font-sans text-4xl font-semibold  text-right text-white "> Hello {{ usePage().props.auth.user.name }}! 
                        <p class="text-gray-300 font-sans">Welcome to your Dashboard Overview </p>
                    </h5>
                </div>
                <div class="md:flex bg-gray-800 rounded-lg shadow-lg p-2 mt-5 ml-[25vh] mr-10 gap-2  overflow-auto h-[80vh]" >
                    <div class="w-[100%]  lg:w-[90%]" >
                        <table class=" w-full border rounded-lg  h-full   sm:rounded-lg ">
                            <thead class="text-md font-bold text-gray-700 ">
                                <tr class="bg-gray-600 border-gray-700 border-b font-bold text-white text-2xl uppercase text-left ">
                                    <th scope="col" class="px-6 py-3 ">
                                        PROJECTs
                                    </th>
                                    <th scope="col" class="px-6 py-3  ">
                                        created by
                                    </th>
                                    <th scope="col" class="px-6 py-3  ">
                                        created at
                                    </th>
                                    <th scope="col" class="px-6 py-3  ">
                                        updated at
                                    </th>                                  
                                </tr>
                                <tr  class=" bg-white border-gray-700 border-b mt-3 text-lg text-left  cursor-pointer hover:bg-gray-300 " v-for="(project, index) in Projects" :key="index" >
                                        <template v-if="index <= 8"  >
                                        <th scope="col" class="px-9 py-[2.8vh] uppercase" > <a :href="route('items.index',project)">{{ project.name }}</a> 
                                        </th>
                                        <th scope="col" class="px-6 py-3  "> <a :href="route('items.index',project)">
                                            {{ project.user.name }} </a>
                                        </th>
                                        <th scope="col" class="px-6 py-3  "> <a :href="route('items.index',project)">
                                            {{ converttimedate(project.created_at ) }} </a>
                                        </th>
                                        <th scope="col" class="px-6 py-3  "> <a :href="route('items.index',project)">
                                            {{ converttimedate(project.updated_at ) }} </a>
                                        </th>     
                                    </template>                   
                                    </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="lg:w-[40%] max-h-[37vmin] " >
                        <div class="h-full grid grid-cols-8 grid-rows-8 gap-2 gap-y-2 ">
                            <div class="bg-white text-[#3ca9e0] text-md font-bold col-span-4 row-span-3 whitespace-normal shadow-xl rounded overflow-hidden transition ease-in-out delay-150 hover:scale-[104%] duration-300 ps-4 uppercase">
                                <svg width="256" height="256" viewBox="0 0 16 16" fill="#1e3a89" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 inline-block "><rect width="16" height="16" x="0" y="0" rx="2" fill="transparent"></rect>
                                    <path fill="none" stroke="#1e3a89" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M1.75 2.75H10v11.5H1.75zm8.25 1l4.25 2l-4.25 7.5"/></svg>
                                <p class="inline-block text-[#1e3a89] font-extrabold text-1xl ml-2 mt-4" >new PROJECTS </p>
                                <p class="font-sans text-8xl text-gray-600 col-span-4 whitespace-normal mt-0 text-center overflow-hidden">19</p>
                            </div>
                            <div class="bg-white text-[#3ca9e0] text-md font-bold col-span-4 row-span-3 whitespace-normal shadow-xl rounded overflow-hidden transition ease-in-out delay-150 hover:scale-[104%] duration-300 ps-4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="#1e3a89" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 inline-block">
                                    <path  d="m21.704 5.29l-2.997-2.997A.996.996 0 0 0 18 2H6a.996.996 0 0 0-.707.293L2.296 5.29A.994.994 0 0 0 2 5.999V19a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V5.999a.994.994 0 0 0-.296-.709zM6.414 4h11.172l1 1H5.414l1-1zM17 13v1H7v-4h2v2h6v-2h2v3z"/></svg>
                                <p class="inline-block text-[#1e3a89] font-extrabold text-1xl ml-2 mt-4 uppercase" >Recent updated items </p>
                                <p class="font-sans text-8xl text-gray-600 col-span-4 whitespace-normal mt-0 text-center overflow-hidden">30</p>
                            </div>
                            <div  class="bg-white text-[#3ca9e0] text-md font-bold col-span-4 row-span-3 whitespace-normal shadow-xl rounded overflow-hidden transition ease-in-out delay-150 hover:scale-[104%] duration-300 ps-4">
                                <svg viewBox="0 0 24 24" fill="#1e3a89" xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 inline-block">
                                    <path d="M21.838 8.445c0-.001-.001-.001 0 0l-.003-.004l-.001-.001v-.001a.809.809 0 0 0-.235-.228l-9.164-6.08a.834.834 0 0 0-.898 0L2.371 8.214A.786.786 0 0 0 2 8.897v6.16a.789.789 0 0 0 .131.448v.001l.002.002l.01.015v.002h.001l.001.001l.001.001c.063.088.14.16.226.215l9.165 6.082a.787.787 0 0 0 .448.139a.784.784 0 0 0 .45-.139l9.165-6.082a.794.794 0 0 0 .371-.685v-6.16a.793.793 0 0 0-.133-.452zm-9.057-4.172l6.953 4.613l-3.183 2.112l-3.771-2.536V4.273zm-1.592 0v4.189l-3.771 2.536l-3.181-2.111l6.952-4.614zm-7.595 6.098l2.395 1.59l-2.395 1.611v-3.201zm7.595 9.311l-6.96-4.617l3.195-2.15l3.765 2.498v4.269zm.795-5.653l-3.128-2.078l3.128-2.105l3.131 2.105l-3.131 2.078zm.797 5.653v-4.27l3.766-2.498l3.193 2.15l-6.959 4.618zm7.597-6.11l-2.396-1.611l2.396-1.59v3.201z"/> </svg>
                                <p class="inline-block text-[#1e3a89] font-extrabold text-1xl  ml-2 mt-4  uppercase" >total project</p>
                                <p class="font-sans text-8xl text-gray-600 col-span-4 whitespace-normal mt-0  text-center overflow-hidden">{{ props.Projects.length }}</p>
                            </div>
                            <div  class="bg-white text-[#3ca9e0] text-md font-bold col-span-4 row-span-3 whitespace-normal shadow-xl rounded overflow-hidden transition ease-in-out delay-150 hover:scale-[104%] duration-300 ps-4">
                                <svg width="256px" height="256px" viewBox="0 0 24 24" fill="#1e3a89" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 inline-block">
                                    <path  d="M18.75 3H5.25A2.25 2.25 0 0 0 3 5.25v13.5A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V5.25A2.25 2.25 0 0 0 18.75 3zm-7.92 13.635a1.08 1.08 0 0 1-1.08 1.08H6.42a1.08 1.08 0 0 1-1.08-1.08V6.42c0-.597.483-1.08 1.08-1.08h3.33c.596 0 1.08.483 1.08 1.08v10.215zm7.83-4.5a1.08 1.08 0 0 1-1.08 1.08h-3.33a1.08 1.08 0 0 1-1.08-1.08V6.42c0-.597.484-1.08 1.08-1.08h3.33c.597 0 1.08.483 1.08 1.08v5.715z"/></svg>
                                <p class="inline-block text-[#1e3a89] font-extrabold text-1xl ml-2 mt-4 uppercase" >total files exported</p>
                                <p class="font-sans text-8xl text-gray-600 col-span-4 whitespace-normal mt-0 text-center overflow-hidden">12</p>
                            </div>
                            <div class="row-span-3 col-span-8 text-gray-400 text-center text-3xl font-bold pt-3 uppercase">
                                PROJECTs total item
                                    <bar-chart  :data="[
                                      ['project 1',props.Projects.length ],
                                      ['project 2',23],
                                      ['project 3',props.Projects.length],
                                      ['project 4', 10],
                                      ['project 5', 18]] " 
                                      :colors="[ '#365486', '#7FC7D9', '#008DDA','#41C9E2', '#ACE2E1','#081f5c','#334eac','#7096d1','#001260']"  :donut="true" class="chart-style" ></bar-chart>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

