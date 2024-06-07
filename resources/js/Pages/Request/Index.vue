<script setup>
import AdminAuthenticatedLayout from "@/Layouts/AdminAuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const props = defineProps({
    bcertificates: Array,
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

<template>
    <AdminAuthenticatedLayout>
        <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
            <li class="mr-6 my-2 md:my-0">
                <a
                    :href="route('admin.dashboard')"
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

        <div class="py-1">
            <div class="max-w-10xl mx-auto">
                <div class="bg-white dark:bg-white-800">
                    <div
                        class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-8"
                    >
                        <table
                            class="w-full border-collapse bg-white text-left text-sm text-gray-500"
                        >
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        scope="col"
                                        class="px-6 py-4 font-medium text-gray-900"
                                    >
                                        #
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-4 font-medium text-gray-900"
                                    >
                                        Name
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-4 font-medium text-gray-900"
                                    >
                                        Request Type
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-4 font-medium text-gray-900"
                                    >
                                        Date Request
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-4 font-medium text-gray-900"
                                    >
                                        Status
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-4 font-medium text-gray-900"
                                    >
                                        Actions
                                    </th>

                                    <!-- Add Actions column header -->
                                </tr>
                            </thead>

                            <tbody
                                class="divide-y divide-gray-100 border-t border-gray-100"
                            >
                                <tr
                                    v-for="bcertificates in bcertificates"
                                    :key="bcertificates.id"
                                >
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ bcertificates.id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ bcertificates.name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ bcertificates.rtype }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ bcertificates.created_at }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap"
                                        :style="{
                                            color: getStatusColor(
                                                bcertificates.status
                                            ),
                                        }"
                                    >
                                        {{ bcertificates.status }}
                                    </td>

                                    <td class="px-1 py-5 whitespace-nowrap">
                                        <Link
                                            :href="`/request/${bcertificates.id}/show`"
                                            class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900"
                                            >Details</Link
                                        >
                                        <Link
                                            :href="`/bcertificates/${bcertificates.id}/edit`"
                                            class="text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"
                                            >Update Status</Link
                                        >

                                        <Link
                                            :href="`/bcertificates/${bcertificates.id}`"
                                            method="delete"
                                            as="button"
                                            type="button"
                                            class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                            >Delete</Link
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div></AdminAuthenticatedLayout
    >
</template>
