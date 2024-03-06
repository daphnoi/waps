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
    addprojectmodal.value = !addprojectmodal.value
}

const additem = (date) => {
    additemModal.value = !additemModal.value
}



const createProject = () => {
    form.post(route("projects.store"), {
        onSuccess: () => {
            addprojectmodal.value = false
            form.reset

        },
        onError: () => {
            alert("error")

        }
    })

    }


const _deleteProject = (data) => {
    alert(data)
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
    <AppLayout title="List of items">
        <template #header>
        </template>
        <sidebar />
        <div class=" h-[100vmin]">
            <div class=" mx-auto py-7 sm:px-10 ml-9 font-sans text-4xl font-semibold text-blue-900 ">
                List of Projects
            </div>
            <form class=" absolute fixed top-[8vmin] right-[18vh] w-[30vh] ">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only text-white">Search</label>     
                <div class="relative">
                    <div class="absolute inset-y-0  start-0 flex items-center ps-7 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    </div>
                <input type="search" id="default-search" class="block w-full p-4  ps-[5vh] text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:border-blue-300 text-left" placeholder="Search Project.." required />
                <button type="submit"  class="text-white absolute end-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-900  font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                </div>
            </form>
            <div class="absolute fixed top-[8.5vmin] right-14">
                <button type="button " @click="back()"
                    class=" flex flex-wrap text-white bg-[#f39202] hover:bg-gray-950 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center ">
                    Back
                    <svg class="rtl:rotate-180 w-6 h-6 ms-4" aria-hidden="true" xmlns="https://www.svgrepo.com/show/533620/arrow-sm-left.svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </button>
            </div>
            <div 
                    class=" bg-gray-800 rounded-lg shadow mt-2 ml-14 mr-14 gap-1 h-[75vmin] items-left">
                    <div class="overflow-x-auto relative sm:rounded-lg fadeIn" data-v-d02c8774="" >
                        <table class="w-full text-sm text-left text-gray-500 text-gray-400" data-v-d02c8774="">
                            <thead class="text-xs text-gray-700 uppercase text-white bg-white-700 text-gray-400" data-v-d02c8774="">
                                <tr data-v-d02c8774="">
                                    <th scope="col" class="py-3 px-6" data-v-d02c8774=""> Project Name </th>
                                    <th scope="col" class="py-3 px-6" data-v-d02c8774=""> Owner</th>
                                    <th scope="col" class="py-3 px-6" data-v-d02c8774=""> Updated By </th>
                                    <th scope="col" class="py-3 px-6" data-v-d02c8774=""> Created at </th>
                                    <th scope="col" class="py-3 px-6" data-v-d02c8774=""> Updated At </th>
                                    <th scope="col" class="py-3 px-15" data-v-d02c8774=""> Action </th></tr>
                                </thead>
                                <tbody data-v-d02c8774=""><tr class="bg-white border-b bg-gray-900 border-gray-700"  data-v-d02c8774="">
                                    <th scope="row" class="py-4 hover:text-blue-700 px-6 font-bold text-gray-900 cursor-pointer whitespace-nowrap text-white" data-v-d02c8774="">
                                        <a href="https://waps.splitsecondsurveys.co.uk/parts/4fpKF/cloud/16" data-v-d02c8774="">Te </a>
                                    </th>
                                    <td class="py-4 px-6" data-v-d02c8774="">daphne</td>
                                    <td class="py-4 px-6" data-v-d02c8774="">daphne</td>
                                    <td class="py-4 px-6" data-v-d02c8774=""><div class="text-base font-semibold" data-v-d02c8774="">February 28th 2024, 1:48:00 pm</div>
                                        <div class="font-normal text-gray-500" data-v-d02c8774="">7 days ago</div></td><td class="py-4 px-6" data-v-d02c8774="">
                                            <div class="text-base font-semibold" data-v-d02c8774="">February 28th 2024, 1:48:00 pm</div>
                                            <div class="font-normal text-gray-500" data-v-d02c8774="">7 days ago</div>
                                        </td><td class="py-4 relative mx-n5" data-v-d02c8774="">
                                            <button data-tooltip-target="tooltip-default" type="button" class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 bg-orange-600 hover:bg-orange-700 focus:ring-orange-800" data-v-d02c8774="">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" data-v-d02c8774="">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" data-v-d02c8774="">
                                                    </path>
                                                </svg>
                                            </button>
                                            <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 bg-red-600 hover:bg-red-700 focus:ring-blue-800" data-v-d02c8774="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" data-v-d02c8774="">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" data-v-d02c8774="">
                                                        </path>
                                                    </svg>
                                                </button>
                                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 bg-blue-600 hover:bg-blue-700 focus:ring-blue-800" data-v-d02c8774=""><a href="https://waps.splitsecondsurveys.co.uk/parts/4fpKF/cloud/16" data-v-d02c8774="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" data-v-d02c8774="">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" data-v-d02c8774="">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Delete item -->
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
</template>

