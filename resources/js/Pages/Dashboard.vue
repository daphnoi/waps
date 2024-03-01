<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import sidebar from './components/sidebar.vue';
import { onMounted, ref } from 'vue';
import { usePage } from '@inertiajs/vue3';


// const urname = ref('user')

// onMounted(() => {
//     urname.value = localStorage.getItem("lastname")
// })

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
        </template>
        <sidebar />
        <div class=" h-[100vmin]">
            <div class=" mx-auto py-12 sm:px-6 lg:px-9">
                <div class="flex justify-between mx-auto">
                    <div>
                        <h5 class="font-sans text-4xl font-semibold text-gray-500">
                            <!-- Hello {{ $page.props.auth.user.name }}!  -->
                            Hello {{ usePage().props.auth.user.name }}! 
                            <p class="text-[#000000] font-sans">
                                Welcome to your Dashboard Overview
                            </p>
                        </h5>
                    </div>
                </div>
                <div
                    class="md:flex bg-gray-800 rounded-lg shadow p-3 mt-5 gap-1 h-[75vmin]">
                    <div class="w-[100%] mb-2 lg:mb-0 lg:w-[90%]  overflow-auto">
                        <table class=" w-full border rounded-lg  h-full text-left  text-gray-500  sm:rounded-lg ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="p-5  py-3 ">
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        TEAMS
                                    </th>
                                    <th scope="col" class="px-6 py-3  ">
                                        PROJECT TITLE
                                    </th>
                                    <th scope="col" class="px-6 py-3  ">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b hover:bg-gray-400 ">
                                    <td class="w-4 p-4">
                                    </td>
                                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap ">
                                        <img class="w-10 h-10 rounded-full" src="https://a.storyblok.com/f/191576/1200x800/a3640fdc4c/profile_picture_maker_before.webp"
                                            alt="Jese image">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold">Neil Sims</div>
                                            <div class="font-normal text-gray-500">neil.sims@flowbite.com</div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        React Developer
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit
                                            user</a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b hover:bg-gray-400 ">
                                    <td class="w-4 p-4">
                                    </td>
                                    <th scope="row"
                                        class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        <img class="w-10 h-10 rounded-full" src="https://images.pexels.com/photos/428364/pexels-photo-428364.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                            alt="Jese image">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold">Bonnie Green</div>
                                            <div class="font-normal text-gray-500">bonnie@flowbite.com</div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        Designer
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit
                                            user</a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b hover:bg-gray-400 ">
                                    <td class="w-4 p-4">
                                    </td>
                                    <th scope="row"
                                        class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        <img class="w-10 h-10 rounded-full" src="https://www.shutterstock.com/image-photo/smiling-african-american-millennial-businessman-600nw-1437938108.jpg"
                                            alt="Jese image">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold">Jese Leos</div>
                                            <div class="font-normal text-gray-500">jese@flowbite.com</div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        Vue JS Developer
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit
                                            user</a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b hover:bg-gray-400 ">
                                    <td class="w-4 p-4">
                                    </td>
                                    <th scope="row"
                                        class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        <img class="w-10 h-10 rounded-full" src="https://www.shutterstock.com/image-photo/profile-picture-smiling-successful-young-600nw-2040223583.jpg"
                                            alt="Jese image">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold">Thomas Lean</div>
                                            <div class="font-normal text-gray-500">thomes@flowbite.com</div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        UI/UX Engineer
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit
                                            user</a>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b hover:bg-gray-400 ">
                                    <td class="w-4 p-4">
                                    </td>
                                    <th scope="row"
                                        class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        <img class="w-10 h-10 rounded-full" src="https://media.istockphoto.com/id/1437816897/photo/business-woman-manager-or-human-resources-portrait-for-career-success-company-we-are-hiring.webp?b=1&s=170667a&w=0&k=20&c=YQ_j83pg9fB-HWOd1Qur3_kBmG_ot_hZty8pvoFkr6A="
                                            alt="Jese image">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold">Leslie Livingston</div>
                                            <div class="font-normal text-gray-500">leslie@flowbite.com</div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        SEO Specialist
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Offline
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600  hover:underline">Edit
                                            user</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="w-[100%] lg:w-[37%] max-h-[50vmin] h-[50vmin] ">
                        <div
                            class="h-full grid grid-cols-8 grid-rows-8 gap-2 gap-y-2 grid grid pt-[0.5] px-1 pb-2">
                            <div
                                class="bg-white text-[#3ca9e0] text-md font-bold col-span-4 row-span-3 whitespace-normal shadow-xl rounded px-2 pt-2 overflow-hidden transition ease-in-out delay-150 hover:scale-[104%] duration-300">
                                PENDING PROJECTS
                                <diV class="mt-[1vmin]">
                                    <p
                                        class="font-sans text-6xl text-[#f39202] col-span-4 whitespace-normal px-2 text-center px-2 overflow-hidden">
                                        <img class="w-15 h-10" src="https://www.svgrepo.com/show/530409/time.svg">
                                        19
                                    </p>
                                </diV>
                            </div>
                            <div
                                class="bg-white text-[#3ca9e0] text-md font-bold col-span-4 row-span-3  whitespace-normal shadow-xl rounded px-2 pt-2 overflow-hidden transition ease-in-out delay-150 hover:scale-[104%] duration-300">
                                TOTAL FILES IMPORTED
                                <diV class="mt-[1vmin]">
                                    <p
                                        class="font-sans text-6xl text-[#f39202] col-span-4 whitespace-normal px-2 text-center px-2 overflow-hidden ">
                                        <img class="w-15 h-10 rounded-full" src="https://www.svgrepo.com/show/288285/files-document.svg">
                                        20
                                    </p>
                                </diV>
                            </div>
                            <div
                                class="bg-white text-[#3ca9e0]  text-md font-bold  col-span-4 row-span-3 whitespace-normal shadow-xl rounded px-2 pt-2 overflow-hidden transition ease-in-out delay-150 hover:scale-[104%] duration-300">
                                TOTAL USERS
                                <diV class="mt-[1vmin]">
                                    <p
                                        class="font-sans text-6xl text-[#f39202] text-col-span-4 whitespace-normal px-2 text-center px-2 overflow-hidden ">
                                        <img class="w-15 h-10" src="https://www.svgrepo.com/show/286216/users-user.svg">
                                        10
                                    </p>
                                </diV>
                            </div>
                            <div
                                class="bg-white text-[#3ca9e0] text-md font-bold col-span-4 row-span-3 whitespace-normal shadow-xl rounded px-2 pt-2 overflow-hidden transition ease-in-out delay-150 hover:scale-[104%] duration-300 ">
                                TOTAL PROJECT
                                <diV class="mt-[1vmin]">
                                    <p
                                        class="font-sans text-6xl text-[#f39202] col-span-4 whitespace-normal px-2 text-center px-2 overflow-hidden">
                                        <img class="w-15 h-10" src="https://www.svgrepo.com/show/216547/idea-light-bulb.svg">
                                        18
                                    </p>
                                </diV>
                            </div>
                            <div class="row-span-4 col-span-8 text-white text-xl font-bold pt-3 ">
                                PROJECT PROGRESS
                                <pie-chart :data="[['To do', 44], ['In progres', 23], ['Done',9]] " :colors="['red', 'orange', 'blue','violet', 'green', 'yellow', 'indigo']" :donut="true"></pie-chart>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

