<script setup>
import AdminAuthenticatedLayout from "@/Layouts/AdminAuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

const props = defineProps({
    users: Array,
});
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

        <div class="py-1">
            <div class="max-w-10xl mx-auto">
                <div class="bg-white dark:bg-white-800">
                    <br />
                    <div class="flex justify-end m-2 p-2">
                        <Link
                            href="/users/create"
                            class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                            >Add Account</Link
                        >
                    </div>

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
                                        Email
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-6 py-4 font-medium text-gray-900"
                                    >
                                        Role
                                    </th>

                                    <th
                                        scope="col"
                                        class="px-6 py-4 font-medium text-gray-900"
                                    >
                                        Actions
                                    </th>
                                </tr>
                            </thead>

                            <tbody
                                class="divide-y divide-gray-100 border-t border-gray-100"
                            >
                                <tr v-for="users in users" :key="users.id">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ users.id }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ users.name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ users.email }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ users.type }}
                                    </td>

                                    <td class="px-1 py-4 whitespace-nowrap">
                                        <Link
                                            :href="`/users/${users.id}/edit`"
                                            class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800"
                                        >
                                            Edit
                                        </Link>

                                        <Link
                                            :href="`/users/${users.id}`"
                                            method="delete"
                                            as="button"
                                            type="button"
                                            class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900"
                                        >
                                            Delete
                                        </Link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AdminAuthenticatedLayout>
</template>
