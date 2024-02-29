<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import sidebar from './../components/sidebar.vue';
import { onMounted, ref } from 'vue';
import { usePage } from '@inertiajs/vue3';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';


const sampleData = ref([
    {
        img: "https://a.storyblok.com/f/191576/1200x800/a3640fdc4c/profile_picture_maker_before.webp",
        name: "Daphne 1",
        projectname: "Waps-Project-0-9444",
        date: `February 27th 2024, 5:17:54 pm`
    },
    {
        img: "https://a.storyblok.com/f/191576/1200x800/a3640fdc4c/profile_picture_maker_before.webp",
        name: "Daphne 2",
        projectname: "Now-Project-0-1454",
        date: `February 27th 2024, 6:17:54 pm`
    },
    {
        img: "https://a.storyblok.com/f/191576/1200x800/a3640fdc4c/profile_picture_maker_before.webp",
        name: "Daphne 3",
        projectname: "Cloud-Project-0-9454",
        date: `February 27th 2024, 5:17:54 pm`
    },
    {
        img: "https://a.storyblok.com/f/191576/1200x800/a3640fdc4c/profile_picture_maker_before.webp",
        name: "Daphne 4",
        projectname: "Wow-Project-8-9454",
        date: `February 27th 2024, 5:17:54 pm`
    },
    {
        img: "https://a.storyblok.com/f/191576/1200x800/a3640fdc4c/profile_picture_maker_before.webp",
        name: "Daphne 5",
        projectname: "Root-Project-8-6969",
        date: `February 27th 2024, 5:17:54 pm`
    },
])

const deleteModal = ref(false)
const project_Name = ref({
    'name': '',
    'date': ''
})

// const urname = ref('user')

// onMounted(() => {
//     urname.value = localStorage.getItem("lastname")
// })


const _deleteProject = (data) => {
    alert(data)
}

const openDeleteModal = (name, date) => {
    project_Name.value.name = name
    project_Name.value.date = date
    deleteModal.value = true
    const now = new Date();
    const day = now.getDay(); // returns a number representing the day of the week, starting with 0 for Sunday
    const hours = now.getHours()  % 12 || 12;
    const minutes = now.getMinutes();
    console.log(`Today is day ${day} and the time is ${hours}:${minutes}.`);
}

</script>

<template>
    <AppLayout title="Projects">
        <template #header>
        </template>
        <sidebar />
        <div class=" h-[100vmin]">
            <div class=" mx-auto py-7 sm:px-10 lg:px10 text-4xl font-semibold ml-10 uppercase font-bold text-blue-900  ">
                Projects
            </div>
            <div class="absolute fixed top-[9vmin] right-14">
                <button type="button "
                    class=" flex flex-wrap text-white bg-[#f39202] hover:bg-gray-950  font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center ">
                    Create New Project
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </button>
            </div>
            <div class="grid grid-rows-1 grid-cols-5 gap-5 px-[20vmin]">
                <div v-for="project in sampleData"
                    class="mt-[1vmin] relative  bg-gray-800 size-md min-h-[75vmin] padding-bottom:50px rounded-lg">
                    <div class="px-2  w-[100%] inline-block">
                        <img class="mt-2 mb-2 w-10 h-10 rounded-full" :src="project.img" alt="Jese image">
                        <div class="font-semibold text-[#ffffff] overflow-hidden ">{{ project.name }} </div>
                        <p
                            class="text-xl font-semibold text-orange-300 overflow-hidden transition ease-in-out delay-150 hover:scale-[104%] duration-300">
                            {{ project.projectname }}</p>
                        <p class="text-white text-xs ">{{ project.date }} </p>
                        <p class="text-white text-xs">21 hours ago</p>
                        <hr class="h-px my-8 bg-slate-200 border-0 bg-gray-700">
                        <div class="text-xl font-semibold text-[#ffffff] overflow-hidden text-center ">Sub Projects</div>
                        <p
                            class="text-white text-medium transition ease-in-out delay-150 hover:underline ease-in-out delay-150 hover:scale-[100%] duration-200 ">
                            WAPS</p>
                        <div class="absolute bottom-4 left-[50%] translate-x-[-50%] rounded-lg">
                            <button type="button"
                                class="flex flex-wrap w-[max-content] text-white bg-[#3ca9e0] hover:bg-[#1e71b8] font-semibold text-sm px-5 py-2.5 text-center">
                                Add Project
                            </button>
                            <div class="flex flex-wrap justify-center gap-2 mt-4 text-[#ffffff]">
                                <button aria-label="Share this post" type="button"
                                    @click="openDeleteModal(project.name, project.date)"
                                    class="p-2 hover:text-red-600 text-center" data-v-e9ac0302="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2" data-v-e9ac0302="">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                            data-v-e9ac0302="">
                                        </path>
                                    </svg>
                                </button>
                                <button aria-label="Bookmark this post" type="button" class="p-2 hover:text-blue-600"
                                    data-v-e9ac0302="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2" data-v-e9ac0302="">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                                            data-v-e9ac0302="">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 w-100 py-3 flex items-center justify-center border-gray-200 sm:px-6" data-v-e9ac0302="">
                <div class="mt-6 -mb-1 flex flex-wrap" data-v-e9ac0302="">
                    <div class="mr-1 mb-1 px-2 py-1 text-sm bg-white border rounded text-gray-400">
                        <span>« Previous</span>
                    </div>
                    <a class="mr-1 mb-1 px-2 bg-white py-1 text-sm shadow-sm border rounded hover:bg-white focus:border-indigo-500 focus:text-indigo-500 bg-white"
                        href="https://waps.splitsecondsurveys.co.uk/projects?page=1">
                        <span>1</span>
                    </a>
                    <div class="mr-1 mb-1 px-2 py-1 text-sm bg-white border rounded text-gray-400 ml-auto">
                        <span>Next »</span>
                    </div>
                </div>
            </div>
            <ConfirmationModal :show="deleteModal" @close="!deleteModal">
                <template #title>
                    Delete API Token
                </template>
                <template #content>
                    Are you sure you would like to delete {{ project_Name.name }}? <br>
                    <small>{{ project_Name.date }}</small>
                </template>

                <template #footer>
                    <SecondaryButton @click="deleteModal = false">
                        Cancel
                    </SecondaryButton>
                    <DangerButton class="ms-3" @click="_deleteProject('John Doe')">
                        Delete
                    </DangerButton>
                </template>
            </ConfirmationModal>
        </div>
    </AppLayout>
</template>

