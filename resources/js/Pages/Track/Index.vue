<template>
    <AuthenticatedLayout>
        <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
            <li class="mr-6 my-2 md:my-0">
                <a
                    :href="route('dashboard')"
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

        <div class="flex justify-center items-start h-screen">
            <div
                class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-8 py-6 shadow-md"
            >
                <div class="flex items-center">
                    <div class="py-2">
                        <svg
                            class="fill-current h-10 w-10 text-green-500 mr-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M10 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm1 14H9v-2h2v2zm0-4H9V7h2v5z"
                            />
                        </svg>
                    </div>
                    <div>
                        <ul
                            class="list-disc pl-4"
                            v-for="bcertificates in bcertificates"
                            :key="bcertificates.id"
                        >
                            <li class="font-bold text-lg">
                                Status Request for:
                                <span class="text-blue-500"
                                    >[{{ bcertificates.name }}]</span
                                >
                            </li>
                            <li class="text-sm">
                                Status ID:
                                <span class="text-blue-500"
                                    >[{{ bcertificates.id }}]</span
                                >
                            </li>
                            <li class="text-sm">
                                Your request has been
                                <span
                                    :style="{
                                        color: getStatusColor(
                                            bcertificates.status
                                        ),
                                    }"
                                    >{{ bcertificates.status }}.</span
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { defineProps } from "vue";

const props = defineProps({
    bcertificates: Object,
    required: true,
});

const getStatusColor = (status) => {
    switch (status) {
        case "approve":
            return "green";
        case "reject":
            return "red";
        case "on process":
            return "blue";
        case "pending":
            return "yellow";
        default:
            return "black";
    }
};
</script>
