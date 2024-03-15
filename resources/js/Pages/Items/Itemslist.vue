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
import Pagination from '@/Components/Pagination.vue';
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';


// props
const props = defineProps([
    "Items",
    "search_text",
    "Project"
])  

const updateform = useForm({
    name:"",
    description:"",
    project:{},
})
const itemform = useForm({
    name: "",
    description: "",
    project_id:props.Project.id
})


const  search= ref(props.search_text )
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
const additemModal = ref(false)
const updateprojmodal = ref(false)




const updateproject = (project) => {
    updateform.project=project
    updateform.name=project.name
    updateform.description=project.description
    updateprojmodal.value = !updateprojmodal.value
}



const _deleteProject = () => {
    router.delete(route("items.delete",{
        id:deleteprojid.value
    }),{
        onSuccess: () => {
            toast.success("Item deleted!", {
            position: toast.POSITION.BOTTOM_RIGHT,
            });
            deleteModal.value = false
            deleteprojid.value = null
        }
    })
}

const additem = () => {
    // itemform.project_id = project_id 
   // console.log(itemform.project_id)
    additemModal.value = !additemModal.value
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
        toast.success("Item successfully updated!", {
        position: toast.POSITION.BOTTOM_RIGHT,
            });
        updateprojmodal.value = false 
            updateform.reset()

        },
        onError: () => {
            toast.error("Please input required fields !", {
            position: toast.POSITION.BOTTOM_RIGHT,
        });
        }
    })
}

const addeditem = () => {
    itemform.post(route("items.store"), {
        onSuccess: () => {
            toast.success("Item successfully added!", {
            position: toast.POSITION.BOTTOM_RIGHT,
            });
            additemModal.value = false
            itemform.reset()
        },
        onError: () => {
            toast.error("Please input required fields !", {
            position: toast.POSITION.BOTTOM_RIGHT,
        });
        }
    })
}

const searchproj = () => {
    router.get(route("items.index", {search:search.value,project:props.Project}))
}


</script>

<template>
    <AppLayout title="List of items">
        <template #header>
        </template>
        <sidebar/>
        <div class=" h-[100vmin] "   >
            <div class=" mx-auto py-11 sm:px-9 ml-[22vh]   flex inline-flex uppercase group " >
                <nav class="flex   py-3 px-5 rounded-lg " aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                    <a :href="route('projects.index')" class="text-3xl text-white  inline-flex items-center">
                        <svg class="w-7 h-9 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        Projects
                    </a>
                    </li>
                    <li>
                    <div class="flex items-center ">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <p class="text-white ml-1 md:ml-2 text-3xl  font-medium ">{{ props.Project.name }} - Items</p>
                    </div>
                    </li>
                </ol>
                </nav>
            </div>

            <div class=" absolute fixed top-[10.9vmin] right-[13vh] w-[30vh] ">   
                     <div class="relative">
                          <div class="absolute inset-y-0  start-0 flex items-center ps-7 pointer-events-none">
                         <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                         </svg>
                         </div>
                     <input v-model="search" @keydown.enter="searchproj()" type="search" id="default-search" class="block w-full p-4  ps-[5vh] text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:border-blue-300 text-left" placeholder="Search Project" required />
                     <button @click="searchproj()" type="submit"  class="text-white absolute end-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-900  font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
                     </div>
                 </div>
            <div class="absolute fixed top-[7vmin] right-[2vh] text-white  inline-flex cursor-pointer transition ease-in-out delay-50 hover:scale-[130%] duration-300" type="button" @click="additem()">
                    <svg width="80" height="80" viewBox="0 0 512 512" style="color:#fff0f0" xmlns="http://www.w3.org/2000/svg" class="h-full w-full"><rect width="512" height="512" x="0" y="0" rx="30" fill="transparent" stroke="transparent" stroke-width="0" stroke-opacity="100%" paint-order="stroke"></rect><svg width="256px" height="256px" viewBox="0 0 24 24" fill="#fff0f0" x="128" y="128" role="img" style="display:inline-block;vertical-align:middle" xmlns="http://www.w3.org/2000/svg"><g fill="#fff0f0"><path fill="currentColor" fill-rule="evenodd" d="M7.345 4.017a42.253 42.253 0 0 1 9.31 0c1.713.192 3.095 1.541 3.296 3.26a40.66 40.66 0 0 1 0 9.445a3.734 3.734 0 0 1-3.296 3.26a42.123 42.123 0 0 1-9.31 0a3.734 3.734 0 0 1-3.296-3.26a40.652 40.652 0 0 1 0-9.444a3.734 3.734 0 0 1 3.295-3.26ZM12 7.007a.75.75 0 0 1 .75.75v3.493h3.493a.75.75 0 1 1 0 1.5H12.75v3.493a.75.75 0 0 1-1.5 0V12.75H7.757a.75.75 0 0 1 0-1.5h3.493V7.757a.75.75 0 0 1 .75-.75Z" clip-rule="evenodd"/></g></svg></svg>
            </div>
            <div class="  ml-[28vh] mr-[4vh] mt-5" >
                        <div>
                            <table class="w-full ">
                                    <thead class="text-md uppercase text-white bg-gray-600 shadow-lg  ">
                                        <tr class="flex justify-start text-left font-bold text-2xl  ">
                                            <th class="py-3 px-4 w-1/6 ">Project Name</th>
                                            <th class="py-3 px-1 w-1/6 ">Owner</th>
                                            <th class="py-3 px-1 w-1/6 ">Updated By</th>
                                            <th class="py-3 px-3 w-1/6 ">Created at</th>
                                            <th class="py-3 px-5 w-1/6 ">Updated At</th>
                                            <th class="py-3 px-[10vh] w-1/6 mr-[-20vh] ">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        <div class="overflow-x-auto inline-fixed">
                            <div class="w-full  bg-gray-700 max-h-[68vh] overflow-y-auto rounded-lg shadow-lg">
                                <template v-for="(project, index) in Items.data" :key="index" >
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
            <Pagination :data="Items" :search="props.search_text "/>
        </div>
        
                    <!-- Delete item -->
                    <ConfirmationModal :show="deleteModal" @close="!deleteModal" >
                        <template #title>
                            Delete Item
                        </template>
                        <template #content >
                            Are you sure you would like to delete this item? <br>
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

                       <!--AddItem-->
                    <DialogModal :show="additemModal" @close="!additemModal">
                        <template #title>
                            Add item
                        </template>
                        <template #content>
                        <Input v-model="itemform.name" type="text" label=" Item Name" />
                        <InputError :message="itemform.errors.name" />
                        <Input v-model="itemform.description" type="text" label="Description" />
                        <InputError :message="itemform.errors.description" />
                    </template>
                    <template #footer>
                        <SecondaryButton @click="additemModal = false">
                            Cancel
                        </SecondaryButton>
                        <DangerButton class="ms-3" @click="addeditem()">
                            Save
                        </DangerButton>
                    </template>
                    </DialogModal>

                    <!--updateproj-->
                    <DialogModal :show="updateprojmodal" @close="!updateprojmodal">
                            <template #title>
                                Update item
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
    </AppLayout>
</template>

