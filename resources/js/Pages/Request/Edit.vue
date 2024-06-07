<template>
    <AdminAuthenticatedLayout>
        <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
            <li class="mr-6 my-2 md:my-0">
                <a
                    :href="route('request.index')"
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
        <br />
        <div class="flex flex-col items-center min-h-screen bg-gray-100">
            <form
                @submit.prevent="request_u"
                class="w-full max-w-md border-4 border-gray-800 rounded-lg p-6"
            >
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label
                            for="status"
                            class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4"
                            >Status:</label
                        >
                    </div>
                    <div class="md:w-2/3">
                        <select
                            name="status"
                            id="status"
                            v-model="form.status"
                            class="form-select block w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        >
                            <option hidden></option>
                            <option value="approve" style="color: green;">Approve</option>
                            <option value="reject" style="color: red;">Reject</option>
                            <option value="on process" style="color: blue;">On Process</option>
                            <option value="pending" style="color: yellow;">Pending</option>
                        </select>
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button
                            type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        >
                            Update Status
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </AdminAuthenticatedLayout>
</template>
<script setup>
import AdminAuthenticatedLayout from "@/Layouts/AdminAuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    bcertificates: Object,
});

const form = useForm({
    status: null,
});

function request_u() {
    Inertia.post(`/bcertificates/${props.bcertificates.id}`, {
        _method: "put",
        status: form.status,
    });
}
</script>
