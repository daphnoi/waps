<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import DeleteUserForm from '@/Pages/Profile/Partials/DeleteUserForm.vue';
import LogoutOtherBrowserSessionsForm from '@/Pages/Profile/Partials/LogoutOtherBrowserSessionsForm.vue';
import SectionBorder from '@/Components/SectionBorder.vue';
import TwoFactorAuthenticationForm from '@/Pages/Profile/Partials/TwoFactorAuthenticationForm.vue';
import UpdatePasswordForm from '@/Pages/Profile/Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm.vue';

defineProps({
    confirmsTwoFactorAuthentication: Boolean,
    sessions: Array,
});
</script>

<template >
    <AppLayout title="Profile">

        <template #header>
            <h2 class="fixed w-full  static flex items-center justify-between px-10 py-4  z-10  bg-fixed">
                <p class="text-6xl text-blue-800 font-bold bg-gray-200 rounded-full shadow-lg">Profile</p>
                <a href="https://waps_s4.com/dashboard" class="text-3xl hover:text-orange-400 "> ←Dashboard </a>

            </h2>
        </template>
        <div><img class="fixed w-full grayscale  h-[100vh] bg-fixed"
                src="./../../Components/img/SSRlogo.png" />
        </div>
        <div class="absolute ml-[100vh]">
            <div class=" mt-[7vh] ml-20 sm:px-6 lg:px-8  max-w-7xl mx-auto   ">
                <div v-if="$page.props.jetstream.canUpdateProfileInformation">
                    <UpdateProfileInformationForm :user="$page.props.auth.user" />

                    <SectionBorder />
                </div>

                <div v-if="$page.props.jetstream.canUpdatePassword">
                    <UpdatePasswordForm class="mt-10 sm:mt-0" />


                </div>

            </div>
        </div>
        <div class="group ">
            <img class="absolute mt-[15vh] ml-60 w-[70vh]  float-left transition duration-300 transform group-hover:-rotate-180"
                src="./../../Components/img/Vector.png" />
            <div class="absolute z-10 hidden group-hover:block  w-[100h]   ">
                <img class="w-[60vh] mt-[35vh] ml-[25vh] float-center" src="./../../Components/img/logoS4.png">
                <p class="text-5xl font-extrabold ml-[20vh] ">Word Association Production Software</p>


            </div>
        </div>
    </AppLayout>
</template>
