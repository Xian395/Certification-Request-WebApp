<script setup>
import AdminAuthenticatedLayout from "@/Layouts/AdminAuthenticatedLayout.vue";
import { router } from "@inertiajs/vue3";
import { useForm } from "@inertiajs/vue3";

defineProps({
    errors: Object,
});

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
});

function submit() {
    router.post("/users", form);
}
</script>
<template>
    <AdminAuthenticatedLayout>
        <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
            <li class="mr-6 my-2 md:my-0">
                <a
                    :href="route('users.index')"
                    class="block py-1 md:py-3 pl-1 align-middle text-pink-600 no-underline hover:text-gray-900"
                >
                    <i class="fas fa-home fa-fw mr-3 text-pink-600"></i>

                    <span
                        class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                        >Back</span
                    >
                </a>
            </li>
        </ul>
        <div>
            <form @submit.prevent="submit" class="max-w-md mx-auto">
                <div class="mb-4">
                    <label
                        for="name"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Name</label
                    >
                    <input
                        id="name"
                        type="text"
                        v-model="form.name"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required
                        autofocus
                        autocomplete="name"
                    />
                    <div class="text-danger text-xs" v-if="errors.name">
                        {{ errors.name }}
                    </div>
                </div>

                <div class="mb-4">
                    <label
                        for="email"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Email</label
                    >
                    <input
                        id="email"
                        type="email"
                        v-model="form.email"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required
                        autocomplete="username"
                    />
                    <div class="text-danger text-xs" v-if="errors.email">
                        {{ errors.email }}
                    </div>
                </div>

                <div class="mb-4">
                    <label
                        for="password"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Password</label
                    >
                    <input
                        id="password"
                        type="password"
                        v-model="form.password"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required
                    />
                    <div class="text-danger text-xs" v-if="errors.password">
                        {{ errors.password }}
                    </div>
                </div>

                <div class="mb-4">
                    <label
                        forInput="password_confirmation"
                        value="Confirm Password"
                        class="block text-gray-700 text-sm font-bold mb-2"
                        >Confirm Password</label
                    >
                    <input
                        id="password_confirmation"
                        type="password"
                        v-model="form.password_confirmation"
                        class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        required
                    />
                    <div
                        class="text-danger text-xs"
                        v-if="errors.password_confirmation"
                    >
                        {{ errors.password_confirmation }}
                    </div>
                </div>

                <div class="flex items-center justify-end mb-4">
                    <button
                        class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                    >
                        Register
                    </button>
                </div>
            </form>
        </div>
    </AdminAuthenticatedLayout>
</template>
