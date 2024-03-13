<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import SectionBorder from '@/Components/SectionBorder.vue';
import UpdatePasswordForm from '@/Pages/Profile/Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm.vue';
import sidebar from './../components/sidebar.vue';

defineProps({
    confirmsTwoFactorAuthentication: Boolean,
    sessions: Array,
});
</script>

<template >
    <AppLayout title="Profile">
        <sidebar/>
         <template #header>
            <h2 class="fixed w-full  static flex items-center justify-between px-10 py-4  z-10 ">
                <a class=" mx-auto py-11 sm:px-9 ml-[22vh]  font-sans text-5xl font-semibold text-white flex inline-flex uppercase" >
                Profile </a>
                <!-- <a :href="route('dashboard')" class="text-3xl text-white hover:text-blue-300 mr-10 "> ←Dashboard </a> -->
            </h2>
        </template> 
         <!-- <div><img class="fixed w-full grayscale  h-[100vh] bg-fixed"
                src="./../../Components/img/SSRlogo.png" />
        </div>  --> 
         <div class="absolute ml-[115vh]">
            <div class=" mt-[7vh] ml-10 sm:px-6 lg:px-8 ">
                <div v-if="$page.props.jetstream.canUpdateProfileInformation">
                    <UpdateProfileInformationForm :user="$page.props.auth.user" />
                    <SectionBorder />
                </div>

                <div v-if="$page.props.jetstream.canUpdatePassword">
                    <UpdatePasswordForm class="mt-[-3vh] " />
                </div>
            </div>
        </div> 
        <div class="group ">
            <img class="absolute mt-[15vh] ml-[35vh] w-[70vh]  float-left "
                src="./../../Components/img/Vector.png" /> 
            <!-- <img class="absolute mt-[15vh] ml-60 w-[70vh]  float-left transition duration-300 transform group-hover:-rotate-180"
                src="./../../Components/img/Vector.png" />  -->
            <!-- <div class="absolute z-10 hidden group-hover:block  w-[100h]   ">
                <img class="w-[60vh] mt-[35vh] ml-[25vh] float-center" src="./../../Components/img/logoS4.png">
                <p class="text-6xl font-extrabold ml-[10vh] text-white">Word Association Production Software</p>
            </div> -->
        </div>
    </AppLayout>
</template>
