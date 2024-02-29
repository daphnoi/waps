<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import sidebar from './components/sidebar.vue';
    import { onMounted, ref } from 'vue';


    const urname = ref('user')

    onMounted(() => {
        urname.value = localStorage.getItem("lastname")
    })

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
                            Hello {{ urname }}!
                            <p class="text-[#000000] font-sans">
                                Welcome to your Dashboard Overview
                            </p>
                        </h5>
                    </div>
                </div>
                <div class="absolute fixed top-[15vmin] right-9">
                    <button type="button "
                        class=" flex flex-wrap text-white bg-orange-700  hover:bg-gray-950 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center ">
                        Create New Project
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
                <div class="md:flex bg-slate-400 rounded-lg shadow p-3 mt-5 gap-1 h-[75vmin]">
                    <div class="w-[100%] mb-2 lg:mb-0 lg:w-[90%]  overflow-auto">
                        <table class=" w-full border rounded-lg  h-full text-left  text-gray-500  sm:rounded-lg h">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50    ">
                                <tr>
                                    <th scope="col" class="p-5 bg-indigo-400">
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-indigo-400">
                                        TEAMS
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-indigo-400 ">
                                        PROJECT TITLE
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-indigo-400 ">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-indigo-400">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b hover:bg-[#AFCBD5] ">
                                    <td class="w-4 p-4">
                                    </td>
                                    <th scope="row"
                                        class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap ">
                                        <img class="w-10 h-10 rounded-full"
                                            src="/docs/images/people/profile-picture-1.jpg" alt="Jese image">
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
                                <tr class="bg-white border-b hover:bg-[#AFCBD5] ">
                                    <td class="w-4 p-4">
                                    </td>
                                    <th scope="row"
                                        class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        <img class="w-10 h-10 rounded-full"
                                            src="/docs/images/people/profile-picture-3.jpg" alt="Jese image">
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
                                <tr class="bg-white border-b hover:bg-[#AFCBD5] ">
                                    <td class="w-4 p-4">
                                    </td>
                                    <th scope="row"
                                        class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        <img class="w-10 h-10 rounded-full"
                                            src="/docs/images/people/profile-picture-2.jpg" alt="Jese image">
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
                                <tr class="bg-white border-b hover:bg-[#AFCBD5] ">
                                    <td class="w-4 p-4">
                                    </td>
                                    <th scope="row"
                                        class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        <img class="w-10 h-10 rounded-full"
                                            src="/docs/images/people/profile-picture-5.jpg" alt="Jese image">
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
                                <tr class="bg-white border-b hover:bg-[#AFCBD5] ">
                                    <td class="w-4 p-4">
                                    </td>
                                    <th scope="row"
                                        class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        <img class="w-10 h-10 rounded-full"
                                            src="/docs/images/people/profile-picture-4.jpg" alt="Jese image">
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
                        <div class="h-full grid grid-cols-8 grid-rows-8 gap-2 gap-y-2 grid grid pt-[0.5] px-1 pb-2">
                            <div
                                class="bg-white text-gray-700 text-md font-bold col-span-4 row-span-3 whitespace-normal shadow-xl rounded px-2 pt-2 overflow-hidden transition ease-in-out delay-150 hover:scale-[104%] duration-300">
                                TOTAL TEAMS
                                <diV class="mt-[1vmin]">
                                    <p
                                        class="font-sans text-6xl col-span-4 whitespace-normal px-2 text-center px-2 overflow-hidden">
                                        19
                                    </p>
                                </diV>
                            </div>
                            <div
                                class="bg-white text-gray-700 text-md font-bold col-span-4 row-span-3  whitespace-normal shadow-xl rounded px-2 pt-2 overflow-hidden transition ease-in-out delay-150 hover:scale-[104%] duration-300">
                                TOTAL FILES IMPORTED
                                <diV class="mt-[1vmin]">
                                    <p
                                        class="font-sans text-6xl col-span-4 whitespace-normal px-2 text-center px-2 overflow-hidden">
                                        20
                                    </p>
                                </diV>
                            </div>
                            <div
                                class="bg-white text-gray-700  text-md font-bold  col-span-4 row-span-3 whitespace-normal shadow-xl rounded px-2 pt-2 overflow-hidden transition ease-in-out delay-150 hover:scale-[104%] duration-300">
                                TOTAL USERS
                                <diV class="mt-[1vmin]">
                                    <p
                                        class="font-sans text-6xl col-span-4 whitespace-normal px-2 text-center px-2 overflow-hidden">
                                        20
                                    </p>
                                </diV>
                            </div>
                            <div
                                class="bg-white text-gray-700 text-md font-bold col-span-4 row-span-3 whitespace-normal shadow-xl rounded px-2 pt-2 overflow-hiddentransition ease-in-out delay-150 hover:scale-[104%] duration-300 ">
                                TOTAL PROJECT
                                <diV class="mt-[1vmin]">
                                    <p
                                        class="font-sans text-6xl col-span-4 whitespace-normal px-2 text-center px-2 overflow-hidden">
                                        20
                                    </p>
                                </diV>
                            </div>
                            <div class="row-span-4 col-span-8 text-black-700 text-xl font-bold pt-3">
                                PROJECT PROGRESS
                                <pie-chart :data="[['To do', 44], ['In progres', 23], ['Done',9]] "
                                    :colors="['red', 'orange', 'blue','violet', 'green', 'yellow', 'indigo']"
                                    :donut="true"></pie-chart>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>