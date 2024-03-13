<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import sidebar from './../components/sidebar.vue';
import { onMounted, ref } from 'vue';
import { useForm, usePage, router} from '@inertiajs/vue3';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DialogModal from '@/Components/DialogModal.vue';
import Input from '@/Components/Input.vue';
import Pagination from '@/Components/Pagination.vue';
import moment from 'moment';
import InputError from '@/Components/InputError.vue';
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';



// props
const props = defineProps([
    "Projects",
    "search_text"
])  

//useforms 
const form = useForm({
    name:"",
    details:"",
})

const updateform = useForm({
    name:"",
    details:"",
    project:{},
})

const itemform = useForm({
    name: "",
    description: "",
    project_id:"",
})

//openf
const   search= ref(props.search_text )
const deleteModal = ref(false)
const updateModal = ref(false)
const deleteprojid = ref(null)
const project_Name = ref({
    'name': '',
    'date': ''
})

const addprojectmodal = ref(false)
const hover = ref(false)
const updateprojmodal = ref(false)

const additemModal = ref(false)


//twfunctions

const addproject = (data) => {
    form.reset();
    addprojectmodal.value = !addprojectmodal.value
}

const updateproject = (project) => {
    updateform.project=project
    updateform.name=project.name
    updateform.details=project.details
    updateprojmodal.value = !updateprojmodal.value
}


const additem = (project_id) => {
    itemform.project_id = project_id 
    additemModal.value = !additemModal.value
}



const createProject = () => {
    form.post(route("projects.store"), {
        onSuccess: () => {
            toast.success("Project successfully created!", {
            position: toast.POSITION.BOTTOM_RIGHT,
            });
            addprojectmodal.value = false
            form.reset()

        },

        onError: () => {
            toast.error("Please input required fields !", {
            position: toast.POSITION.TOP_CENTER,
        });
        }
    })

}


const _deleteProject = () => {
    router.delete(route("projects.delete",{
        id:deleteprojid.value
    }),{
        onSuccess: () => {
            toast.success("Project deleted!", {
            position: toast.POSITION.BOTTOM_RIGHT,
            });
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
            position: toast.POSITION.TOP_CENTER,
        });
        }
    })
}

const updateitem = () => {
    updateform.put(route("projects.update",
    {
        project :updateform.project
    }),{
    onSuccess: () => {
        toast.success("Item successfully updated", {
        position: toast.POSITION.BOTTOM_RIGHT,
        });
        updateprojmodal.value = false
            updateform.reset()

        },
        onError: () => {
            toast.error("Please input required fields !", {
            position: toast.POSITION.TOP_CENTER,
        });

        }
    })
}

const searchproj = () => {
    router.get(route("projects.index", {search:search.value}))
}


</script>

<template>
    <AppLayout title="Projects">
        <template #header>
        </template>
        <sidebar />
        <div class=" h-[100vmin]">
            <div class=" mx-auto py-11 sm:px-9 ml-[22vh]  font-sans text-5xl font-semibold text-white flex inline-flex uppercase" >
                Projects
            </div>
            <div class=" absolute fixed top-[10.2vmin] right-[12vh] w-[30vh] ">   
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
            <div class="absolute fixed top-[9vmin] right-14 transition ease-in-out delay-50 hover:scale-[130%] duration-300" >
                <button type="button " @click="addproject()" class=" inline-flex items-center">
                    <svg width="50" height="50" viewBox="0 0 512 512" style="color:#fff0f0" xmlns="http://www.w3.org/2000/svg" class="h-full w-full"><rect width="512" height="512" x="0" y="0" rx="30" fill="transparent" stroke="transparent" stroke-width="0" stroke-opacity="100%" paint-order="stroke"></rect><svg width="256px" height="256px" viewBox="0 0 16 16" fill="#fff0f0" x="128" y="128" role="img" style="display:inline-block;vertical-align:middle" xmlns="http://www.w3.org/2000/svg"><g fill="#fff0f0"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M1.75 1.75h4.5v4.5h-4.5zm0 8h4.5v4.5h-4.5zm8 0h4.5v4.5h-4.5zm5.05-6h-5m2.5-2.5v5"/></g></svg></svg>
                </button>
            </div>

            <div class="grid grid-rows-1 grid-cols-5 gap-5 px-[10vmin] ml-[20vh] mt-0 ">
                <div v-for="(project, index) in Projects.data" :key="index"
                    class="mt-[1vmin] relative  bg-gray-800 size-md min-h-[75vmin] padding-bottom:50px rounded-lg shadow-lg ">
                    <div class="px-2  w-[100%] inline-block">
                        <img class="mt-2 mb-2 w-10 h-10 rounded-full" :src="project.user.profile_photo_url">
                        <div class="font-semibold text-[#ffffff] overflow-hidden ">{{ project.user.name }} </div>
                        <p
                            class="text-xl font-semibold text-orange-300 overflow-hidden transition ease-in-out delay-150 hover:scale-[104%] duration-300">
                            {{ project.projectname }}</p>
                        <p class="text-white text-md ">{{ project.date }} </p>
                        <a
                            class="font-semibold text-[#ffffff] overflow-hidden uppercase text-3xl break-words text-orange-300 cursor-pointer " :href= "route('items.index',project)"  >
                            {{ project.name }} </a>
                        <p class="font-semibold text-blue-300 overflow-hidden  text-md break-words "> Created: {{ converttimedate(project.created_at ) }} </p>
                        <p class="font-semibold text-blue-200 overflow-hidden  text-md br ak-words"> Updated: {{ converttimedate(project.updated_at ) }} </p>
                        <p class="font-semibold text-gray-200 overflow-hidden text-md break-words">{{ project.details }}
                        </p>
                        <hr class="h-px my-8 bg-slate-200 border-0 bg-gray-700 flex bg-fixed">
                        <div>
                            <p class="text-2xl mb-2  font-md text-gray-200 overflow-hidden text-center uppercase  font-bold">Sub Projects</p> 
                                <p  class="text-white pt-2 text-xl mt-2 transition border-gray-600 hover:bg-gray-500 ease-in-out delay-150  duration-150 cursor-pointer"  v-for="(item, key) in project.items" :key="key" >{{key + 1 }} . &nbsp;{{item.name}}</p>
                        </div>
                        <div class="absolute bottom-4 left-[50%] translate-x-[-50%] rounded-lg " >
                            <button
                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text- px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button" @click="additem(project.id)" @keydown.enter="additem()">
                                Add Item
                            </button>


                            <div class="flex flex-wrap justify-center gap-2 mt-4 text-[#ffffff]">
                                <button aria-label="Share this post" type="button"
                                    @click="openDeleteModal(project.id)"
                                    class="p-2 hover:text-red-600 text-center" data-v-e9ac0302="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2" data-v-e9ac0302="">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                            data-v-e9ac0302="">
                                        </path>
                                    </svg>
                                </button>
                                <button aria-label="Bookmark this post" type="button" @click="updateproject(project)"  class="p-2 hover:text-blue-600"
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

     <!--Pagination--> 
            <Pagination :data="Projects" :search="props.search_text "/>

       <!--Deleteproject-->
            <ConfirmationModal :show="deleteModal" @close="!deleteModal">
                <template #title>
                    Delete File
                </template>
                <template #content  >
                    Are you sure you would like to delete this project? <br>
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

            <!--CreateProject-->
            <DialogModal :show="addprojectmodal" @close="!addprojectmodal" >
                <template #title>
                    Add project
                </template>
                <template #content>
                    <Input v-model="form.name" type="text" label="Project Name" />
                    <InputError :message="form.errors.name" />
                    <Input v-model="form.details" type="text" label="Project Details" />
                    <InputError :message="form.errors.details" />
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
                    ADD item
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
                    Update Project 
                </template>
                <template #content>
                <Input v-model="updateform.name" type="text" label=" Project Name" />
                <InputError :message="updateform.errors.name" />
                <Input v-model="updateform.details" type="text" label="Description" />
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

