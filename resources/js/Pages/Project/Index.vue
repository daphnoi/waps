<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import sidebar from './../components/sidebar.vue';
import { onMounted, ref } from 'vue';
import { useForm, usePage } from '@inertiajs/vue3';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DialogModal from '@/Components/DialogModal.vue';
import Input from '@/Components/Input.vue';
import Pagination from '@/Components/Pagination.vue';


const props = defineProps([
    "Projects"
])  



const form = useForm({
    name: "",
    details: "",
})


const deleteModal = ref(false)

const project_Name = ref({
    'name': '',
    'date': ''
})

const addprojectmodal = ref(false)

const additemModal = ref(false)

const addproject = (data) => {
    form.reset();
    addprojectmodal.value = !addprojectmodal.value
}


const additem = (data) => {
    form.reset();
    additemModal.value = !additemModal.value
}



const createProject = () => {
    form.post(route("projects.store"), {
        onSuccess: () => {
            addprojectmodal.value = false
            form.reset()

        },

        onError: () => {
            alert("error")

        }
    })

}



const _deleteProject = (project) => {
             alert("Project Deleted");
}


const openDeleteModal = (name, date) => {
    project_Name.value.name = name
    project_Name.value.date = date
    deleteModal.value = true
    const now = new Date();
    const day = now.getDay(); // returns a number representing the day of the week, starting with 0 for Sunday
    const hours = now.getHours() % 12 || 12;
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
            <div class=" mx-auto py-7 sm:px-10 lg:px10 text-4xl font-extrabold ml-10 uppercase  text-blue-900  ">
                Projects
            </div>
            <div class="absolute fixed top-[9vmin] right-14">
                <button type="button " @click="addproject()"
                    class=" flex flex-wrap text-white bg-[#f39202]  hover:bg-gray-950  font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center ">
                    Create New Project
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </button>
            </div>

            <div class="grid grid-rows-1 grid-cols-5 gap-5 px-[20vmin]">
                <div v-for="(project, index) in Projects.data" :key="index"
                    class="mt-[1vmin] relative  bg-gray-800 size-md min-h-[75vmin] padding-bottom:50px rounded-lg">
                    <div class="px-2  w-[100%] inline-block">
                        <img class="mt-2 mb-2 w-10 h-10 rounded-full" :src="project.user.profile_photo_url">
                        <div class="font-semibold text-[#ffffff] overflow-hidden ">{{ project.user.name }} </div>
                        <p
                            class="text-xl font-semibold text-orange-300 overflow-hidden transition ease-in-out delay-150 hover:scale-[104%] duration-300">
                            {{ project.projectname }}</p>
                        <p class="text-white text-md ">{{ project.date }} </p>
                        <p
                            class="font-semibold text-[#ffffff] overflow-hidden uppercase text-3xl break-words text-orange-300">
                            {{ project.name }} </p>
                        <p class="font-semibold text-[#ffffff] overflow-hidden uppercase text-sm break-words">{{
                            project.created_at }} </p>
                        <p class="font-semibold text-[#ffffff] overflow-hidden uppercase text-sm break-words">{{
                            project.updated_at }} </p>
                        <p class="font-semibold text-[#ffffff] overflow-hidden text-md break-words">{{ project.details }}
                        </p>
                        <hr class="h-px my-8 bg-slate-200 border-0 bg-gray-700">
                        <p class="text-2xl mb-2 font-md text-[#ffffff] overflow-hidden text-center uppercase  font-bold">Sub Projects</p>
                        <p
                            class="text-white text-md   transition ease-in-out delay-150 border-4 border-gray-600 hover:border-gray-300 ease-in-out delay-150 hover:scale-[100%] duration-200 ">
                            {{ project.name}}</p>

                        <div class="absolute bottom-4 left-[50%] translate-x-[-50%] rounded-lg ">
                            <button
                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button" @click="additem()">
                                Add Item
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
            
            <Pagination :data="Projects.data" />
                   
            <ConfirmationModal :show="deleteModal" @close="!deleteModal">
                <template #title>
                    Delete File
                </template>
                <template #content>
                    Are you sure you would like to delete {{ project_Name.name }}? <br>
                    <small>{{ project_Name.date }}</small>
                </template>

                <template #footer>
                    <SecondaryButton @click="deleteModal = false">
                        Cancel
                    </SecondaryButton>
                    <DangerButton class="ms-3" @click="_deleteProject()">
                        Delete
                    </DangerButton>
                </template>
            </ConfirmationModal>
        </div>
    </AppLayout>




    <!--CreateProject-->
    <DialogModal :show="addprojectmodal" @close="!addprojectmodal" >
        <template #title>
            Add project
        </template>
        <template #content>
            <Input v-model="form.name" type="text" label="Project Name" />
            <Input v-model="form.details" type="text" label="Project Details" />
        </template>
        <template #footer>
            <SecondaryButton @click="addprojectmodal = false">
                Cancel
            </SecondaryButton>
            <DangerButton class="ms-3" @click="createProject">
                Save
            </DangerButton>
        </template>
    </DialogModal>



    <!--AddItem-->
    <DialogModal :show="additemModal" @close="!additemModal">
        <template #title>
            Add Sub Project
        </template>
        <template #content>
        <Input v-model="form.name" type="text" label="Project Name" />
        <Input v-model="form.details" type="text" label="Details" />
    </template>
    <template #footer>
        <SecondaryButton @click="additemModal = false">
            Cancel
        </SecondaryButton>
        <DangerButton class="ms-3" @click="addsubProject">
            Save
        </DangerButton>
    </template>
</DialogModal></template>

