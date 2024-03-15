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
            </h2>
        </template> 
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
        </div>
    </AppLayout>
</template>
