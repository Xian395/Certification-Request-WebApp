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

        <div class="bg-white p-8 rounded-lg shadow-md mx-auto max-w-md">
            <h2 class="text-2xl font-bold mb-4">DETAILS</h2>
            <br />
            <p class="text-gray-800 mb-2">
                <span>Name:</span>
                <span class="font-bold" style="color: red;font-family: Impact; margin-left: 10px">{{
                    bcertificates.name
                }}</span>
            </p>
            <p class="text-gray-800 mb-2">
                <span>Birth Date:</span>
                <span class="font-bold" style="color: red;font-family: Impact; margin-left: 10px">
                    {{ bcertificates.birthDate }}</span
                >
            </p>
            <p class="text-gray-800 mb-2">
                <span>Contact Number:</span>
                <span class="font-bold" style="color: red;font-family: Impact; margin-left: 10px">{{
                    bcertificates.contactNumber
                }}</span>
            </p>
            <p class="text-gray-800 mb-2">
                <span>Age:</span>
                <span class="font-bold" style="color: red;font-family: Impact; margin-left: 10px">
                    {{ bcertificates.age }}</span
                >
            </p>
            <p class="text-gray-800 mb-2">
                <span>Sex:</span>
                <span class="font-bold" style="color: red;font-family: Impact; margin-left: 10px">
                    {{ bcertificates.sex }}</span
                >
            </p>
            <p class="text-gray-800 mb-2">
                <span>Civil Status:</span>
                <span class="font-bold" style="color: red;font-family: Impact; margin-left: 10px">{{
                    bcertificates.civilStatus
                }}</span>
            </p>
            <p class="text-gray-800 mb-2">
                <span>Occupation:</span>
                <span class="font-bold" style="color: red;font-family: Impact; margin-left: 10px">{{
                    bcertificates.occupation
                }}</span>
            </p>
            <p class="text-gray-800 mb-2">
                <span>Purpose:</span>
                <span class="font-bold" style="color: red; font-family: Impact; margin-left: 10px">
                    {{ bcertificates.purpose }}</span
                >
            </p>
            <p class="text-gray-800 mb-2">
                <span>Request Type:</span>
                <span class="font-bold" style="color: red; font-family: Impact; margin-left: 10px">{{
                    bcertificates.rtype
                }}</span>
            </p>

        </div>
    </AdminAuthenticatedLayout>
</template>
<script setup>
import AdminAuthenticatedLayout from "@/Layouts/AdminAuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import { defineProps } from "vue";

defineProps({
    bcertificates: Object,
    required: true,
});

</script>
