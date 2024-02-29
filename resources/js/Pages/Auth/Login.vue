<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in" />

    <AuthenticationCard>
        <div v-if="status" class="mb-2 mt-3 font-medium text-sm text-green-600 ">
            {{ status }}
        </div>
        <form @submit.prevent="submit">
            <div class="flex items-center justify-center text-center text-[4vmin] font-sm text-blue-900 font-bold">
                <img class="h-40 w-70 flex" src="./../../Components/img/logoS4.png">
               
            </div>

            <div>
                <InputLabel for="email" value="Email" />
                <TextInput id="email" v-model="form.email" type="email" class="mt-3 block w-full text-xl"  required autofocus
                    autocomplete="username" />
                <InputError class="mt-2  ml-5" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />
                <TextInput id="password" v-model="form.password" type="password" class="mt-1 block w-full text-xl" required
                    autocomplete="current-password" />
                <InputError class="mt-2  ml-5" :message="form.errors.password" />
            </div>

            <div class="inline-block justify-between mt-5 ml-5 ">
                <label class="items-center">
                    <Checkbox v-model:checked="form.remember" name="remember" />
                    <span class="ms-2 text-lg text-gray-800">Remember me</span>
                </label>
                <Link v-if="canResetPassword" :href="route('password.request')"
                    class="ml-[11vh] underline text-lg text-gray-800 hover:text-orange-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Forgot your password?
                </Link>
            </div>


            <div>
                <PrimaryButton class="mt-[5vh] ml-[11vh]" :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>

            <div class="flex justify-center mt-5 text-xl ">Don't have an account?
                <a href="register" class="inline-block ml-3 text-blue-600 hover:text-gray-800">Sign Up!
                </a>
            </div>
        </form>
    </AuthenticationCard>
</template>
