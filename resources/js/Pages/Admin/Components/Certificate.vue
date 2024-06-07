<script setup>
import AdminAuthenticatedLayout from "@/Layouts/AdminAuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const props = defineProps({
    bcertificates: Array,
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
        <br />


        <div class="py-1">
        <div class="max-w-10xl mx-auto">
          <div class="bg-white dark:bg-white-800 ">
            

            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-8">
              <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Detail</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Total</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Expenditure Date</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Actions</th> <!-- Add Actions column header -->
                  </tr>
                </thead>

                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                  <tr v-for="bcertificates in bcertificates" :key="bcertificates.id">
                    <td class="px-6 py-4 whitespace-nowrap">{{ bcertificates.name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ bcertificates.age }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{bcertificates.sex }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">

                      <Link 
                       :href="'/bcertificates/${bcertificates.id}/edit'"
                       class="px-4 py-2 bg-green-500 hover:bg-green-600 text-white rounded"
                       > Edit</Link>

                       <Link 
                       :href="'/bcertificates/${bcertificates.id}/delete'"
                       class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded"
                       > Delete</Link>
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
