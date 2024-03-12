<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import sidebar from './../components/sidebar.vue';
import { onMounted, ref, watch, defineProps} from 'vue';
import { useForm, usePage,router } from '@inertiajs/vue3';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DialogModal from '@/Components/DialogModal.vue';
import Input from '@/Components/Input.vue';
import moment from 'moment';
import InputError from '@/Components/InputError.vue';


// props
const props = defineProps([
    "Items"
])  


const updateform = useForm({
    name:"",
    description:"",
    project:{},
})



const search = ref('');
const perPage =ref(5);
const deleteModal = ref(false)
const updateModal = ref(false)
const deleteprojid = ref(null)
const selectedProject = ref(null);
const project_Name = ref({
    'name': '',
    'date': ''
})

const listperproject = ref({
    'id':"",
    'name':"",
    "items":[]
})

const addprojectmodal = ref(false)

const updateprojmodal = ref(false)




const updateproject = (project) => {
    updateform.project=project
    updateform.name=project.name
    updateform.details=project.details
    updateprojmodal.value = !updateprojmodal.value
}



const _deleteProject = () => {
    router.delete(route("items.delete",{
        id:deleteprojid.value
    }),{
        onSuccess: () => {
            deleteModal.value = false
            deleteprojid.value = null
        }
    })
}


const openDeleteModal = (projectid) => {
    deleteprojid.value = projectid;
    deleteModal.value = true;


}

const converttimedate = (time) => {
    return moment(time).format('MMMM Do YYYY, h:mm:ss a');
}


const updateitem = () => {
    updateform.put(route("items.update",
    {
        item :updateform.project
    }),{
    onSuccess: () => {
        updateprojmodal.value = false
            updateform.reset()

        },

        onError: () => {
        }
    })
}

const searchproj = (search) => {
    form.get(route("items.index"))
}

</script>

<template>
    <AppLayout title="List of items">
        <template #header>
        </template>
        <sidebar/>
        <div class=" h-[100vmin] "  >
            <div  class=" mx-auto py-11 sm:px-9 ml-[22vh]  font-sans text-4xl font-semibold text-white flex inline-flex uppercase" >
                Sub Projects 
            </div>
            <form class=" absolute fixed top-[10vmin] right-[18vh] w-[30vh]  ">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only text-white">Search</label>     
                <div class="relative">
                    <div class="absolute inset-y-0  start-0 flex items-center ps-7 pointer-events-none" >
                    <svg class="w-4 h-4 text-gray-500 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    </div>
                <input v-model="search" type="search" id="default-search" class="block w-full p-4  ps-[5vh]  text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:border-blue-300 text-left" placeholder="Search Project.." required />
                <button  @click="searchproj" type="submit"  class="text-white absolute end-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-900  font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                </div>
            </form>
            <div class="absolute fixed top-[10vmin] right-14">
                <a :href="route('projects.index')"
                    class=" flex flex-wrap text-white bg-[#f39202] hover:bg-gray-950 font-medium rounded-lg text-sm px-7 py-4 text-center inline-flex items-center ">
                    Back
                    <svg class="rtl:rotate-180 w-6 h-6 ms-4" aria-hidden="true" xmlns="https://www.svgrepo.com/show/533620/arrow-sm-left.svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
            <div class="  ml-[25vh] mr-[4vh] mt-5" >
                        <div>
                            <table class="w-full ">
                                    <thead class="text-md uppercase text-white bg-gray-600 shadow-lg  ">
                                        <tr class="flex justify-start text-left font-bold text-2xl  ">
                                            <th class="py-3 px-4 w-1/6 ">Project Name</th>
                                            <th class="py-3 px-4 w-1/6 ">Owner</th>
                                            <th class="py-3 px-4 w-1/6 ">Updated By</th>
                                            <th class="py-3 px-3 w-1/6 ">Created at</th>
                                            <th class="py-3 px-5 w-1/6 ">Updated At</th>
                                            <th class="py-3 px-[10vh] w-1/6 mr-[-20vh] ">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        <div class="overflow-x-auto inline-fixed">
                            <div class="w-full  bg-gray-700 max-h-[70vh] overflow-y-auto rounded-lg shadow-lg">
                                <template v-for="(project, index) in Items" :key="index" >
                                    <div class="bg-gray-200 border-gray-700 border-b hover:bg-gray-300  flex justify-start items-center  text-2xl">
                                        <div class="w-1/6 py-4 px-6  ">
                                            <a :href="route('items.item', {item:project})">{{index + 1 }} . &nbsp;{{ project.name }}</a>
                                        </div>
                                        <div class="w-1/6 py-4 px-4">{{ project.user.name }}</div>
                                        <div class="w-1/6 py-4 px-4 ">daphne</div>
                                        <div class="w-1/6 py-4 px-3">{{ converttimedate(project.created_at) }}</div>
                                        <div class="w-1/6 py-4 px-3 ">{{ converttimedate(project.updated_at) }}</div>
                                        <div class="w-1/6 py-4 px-[10vh] flex">
                                            <button @click="updateproject(project)" type="button" class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 bg-orange-600 hover:bg-orange-700 focus:ring-orange-800" >
                                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" >
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" >
                                                        </path>
                                                    </svg>
                                            </button>
                                        <button @click="openDeleteModal(project.id)" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 bg-red-600 hover:bg-red-700 focus:ring-blue-800" >
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" >
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                </svg>
                                        </button>
                                        </div>
                                    </div>
                                </template>
                            </div>
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

                    <!--updateproj-->
                    <DialogModal :show="updateprojmodal" @close="!updateprojmodal">
                            <template #title>
                                Update file name
                            </template>
                            <template #content>
                            <Input v-model="updateform.name" type="text" label=" Item Name" />
                            <InputError :message="updateform.errors.name" />
                            <Input v-model="updateform.description" type="text" label="Description" />
                            <InputError :message="updateform.errors.description" />
                        </template>
                        <template #footer>
                            <SecondaryButton @click="updateprojmodal = false">
                                Cancel
                            </SecondaryButton>
                            <DangerButton class="ms-3" @click="updateitem()">
                                Save
                            </DangerButton>
                        </template>
                    </DialogModal>
        </div>
    </AppLayout>
</template>

