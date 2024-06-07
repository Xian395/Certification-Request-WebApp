<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
import { onMounted, defineProps } from "vue";
import { initFlowbite } from "flowbite";

const props = defineProps({
    bcertificates: Array,
    required: true,
});

onMounted(() => {
    initFlowbite();
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <aside
            
            id="sidebar-multi-level-sidebar"
            class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
            aria-label="Sidebar"
        >
            <div
                class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800"
            >
                <ul class="space-y-2 font-medium" >
                    <li>
                        <a
                            href="#"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                            ><img
                                src="/images/sample.jpg"
                                alt="Example Image"
                                style="
                                    width: 150px;
                                    height: 150px;
                                    border-radius: 50%;
                                "
                            />

                            <span class="ms-3"></span>
                        </a>
                    </li>
                    <li>
                        <button
                            type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-example"
                            data-collapse-toggle="dropdown-example"
                        >
                            <svg
                                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 18 18"
                            >
                                <path
                                    d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"
                                />
                            </svg>
                            <span
                                class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap"
                                >Request Certificate</span
                            >
                            <svg
                                class="w-3 h-3"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 10 6"
                            >
                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m1 1 4 4 4-4"
                                />
                            </svg>
                        </button>
                        <ul id="dropdown-example" class="hidden py-2 space-y-2">
                            <li>
                                <a
                                    :href="route('bcertificate.create')"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    >Barangay Certificate</a
                                >
                            </li>
                            <li>
                                <a
                                    :href="route('business.index')"
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    >Bussiness Clearance</a
                                >
                            </li>
                            <li>
                                <a
                                    href=""
                                    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    >Barangay Clearance</a
                                >
                            </li>
                        </ul>
                    </li>
                    <li >
                        
                        <a
                        :href="route('track.index')"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <svg
                                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                width="800px"
                                height="800px"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M21.5 13V7C21.5 5.93913 21.0786 4.92178 20.3284 4.17163C19.5783 3.42149 18.5609 3 17.5 3H5.5C4.43913 3 3.42178 3.42149 2.67163 4.17163C1.92149 4.92178 1.5 5.93913 1.5 7V14C1.5 15.0609 1.92149 16.0783 2.67163 16.8285C3.42178 17.5786 4.43913 18 5.5 18H7.5L9.79004 20.29C10.0493 20.5496 10.3638 20.7473 10.7101 20.8685C11.0564 20.9897 11.4255 21.0312 11.79 20.99"
                                    stroke="#000000"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M17.94 21.88C19.8399 21.88 21.38 20.3399 21.38 18.44C21.38 16.5401 19.8399 15 17.94 15C16.0401 15 14.5 16.5401 14.5 18.44C14.5 20.3399 16.0401 21.88 17.94 21.88Z"
                                    stroke="#000000"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M22.5009 23L20.3809 20.88"
                                    stroke="#000000"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>

                            <span class="flex-1 ms-3 whitespace-nowrap"
                                >Track Request</span
                            >
                        </a>
                    </li>
                    <li>
                        <a
                            href=""
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <svg
                                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"
                                />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap"
                                >Notification</span
                            >
                            <span
                                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300"
                                >3</span
                            >
                        </a>
                    </li>
                    <li>
                        <a
                            href=""
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <svg
                                fill="#000000"
                                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                version="1.1"
                                id="Filled_Icons"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px"
                                y="0px"
                                viewBox="0 0 24 24"
                                enable-background="new 0 0 24 24"
                                xml:space="preserve"
                            >
                                <g id="Transaction-Filled">
                                    <path
                                        d="M14,11V8H1V4h13V1l7,5L14,11z M3,18l7,5v-3h13v-4H10v-3L3,18z"
                                    />
                                </g>
                            </svg>

                            <span class="flex-1 ms-3 whitespace-nowrap"
                                >Transaction</span
                            >
                        </a>
                    </li>
                    <li>
                        <a
                            href=""
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                        >
                            <svg
                                class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg"
                                x="0px"
                                y="0px"
                                width="100"
                                height="100"
                                viewBox="0 0 50 50"
                            >
                                <path
                                    d="M 1.9375 2.78125 C 1.386719 2.78125 0.9375 3.230469 0.9375 3.78125 L 0.9375 39.46875 C 0.9375 42.082031 1.699219 44.1875 3.25 45.71875 C 5.714844 48.15625 9.242188 48.21875 9.59375 48.21875 L 41.375 48.21875 C 41.429688 48.21875 41.773438 48.226563 42.25 48.15625 C 39.136719 47.761719 34.625 45.617188 34.625 39.46875 L 34.625 3.78125 C 34.625 3.230469 34.179688 2.78125 33.625 2.78125 Z M 36.625 9.5 L 36.625 39.46875 C 36.625 46.113281 43.039063 46.21875 43.3125 46.21875 C 43.851563 46.214844 48.3125 46.011719 49 40.90625 C 49.046875 40.472656 49.0625 40.019531 49.0625 39.53125 L 49.0625 14.4375 C 49.0625 14.433594 49.0625 14.410156 49.0625 14.40625 C 49.027344 12.957031 48.25 10.414063 45.65625 9.71875 C 44.84375 9.914063 44.167969 10.277344 43.65625 10.8125 C 42.332031 12.195313 42.375 14.324219 42.375 14.34375 L 42.375 38.625 C 42.375 39.179688 41.929688 39.625 41.375 39.625 C 40.820313 39.625 40.375 39.179688 40.375 38.625 L 40.375 14.375 C 40.371094 14.300781 40.273438 11.511719 42.125 9.5 Z M 7.21875 11 L 26.9375 11 C 27.492188 11 27.9375 11.449219 27.9375 12 C 27.9375 12.550781 27.492188 13 26.9375 13 L 7.21875 13 C 6.667969 13 6.21875 12.550781 6.21875 12 C 6.21875 11.449219 6.667969 11 7.21875 11 Z M 7.21875 15 L 26.9375 15 C 27.492188 15 27.9375 15.449219 27.9375 16 C 27.9375 16.550781 27.492188 17 26.9375 17 L 7.21875 17 C 6.667969 17 6.21875 16.550781 6.21875 16 C 6.21875 15.449219 6.667969 15 7.21875 15 Z M 7.6875 23 L 14.46875 23 C 15.019531 23 15.46875 23.449219 15.46875 24 C 15.46875 24.550781 15.019531 25 14.46875 25 L 7.6875 25 C 7.136719 25 6.6875 24.550781 6.6875 24 C 6.6875 23.449219 7.136719 23 7.6875 23 Z M 19.21875 23 L 26.9375 23 C 27.492188 23 27.9375 23.449219 27.9375 24 C 27.9375 24.550781 27.492188 25 26.9375 25 L 19.21875 25 C 18.667969 25 18.21875 24.550781 18.21875 24 C 18.21875 23.449219 18.667969 23 19.21875 23 Z M 7.6875 27 L 14.46875 27 C 15.019531 27 15.46875 27.445313 15.46875 28 C 15.46875 28.554688 15.019531 29 14.46875 29 L 7.6875 29 C 7.136719 29 6.6875 28.554688 6.6875 28 C 6.6875 27.445313 7.136719 27 7.6875 27 Z M 19.21875 27 L 26.9375 27 C 27.492188 27 27.9375 27.445313 27.9375 28 C 27.9375 28.554688 27.492188 29 26.9375 29 L 19.21875 29 C 18.667969 29 18.21875 28.554688 18.21875 28 C 18.21875 27.445313 18.667969 27 19.21875 27 Z M 19.21875 30.78125 L 26.9375 30.78125 C 27.492188 30.78125 27.9375 31.226563 27.9375 31.78125 C 27.9375 32.335938 27.492188 32.78125 26.9375 32.78125 L 19.21875 32.78125 C 18.667969 32.78125 18.21875 32.335938 18.21875 31.78125 C 18.21875 31.226563 18.667969 30.78125 19.21875 30.78125 Z M 7.6875 31 L 14.46875 31 C 15.019531 31 15.46875 31.445313 15.46875 32 C 15.46875 32.554688 15.019531 33 14.46875 33 L 7.6875 33 C 7.136719 33 6.6875 32.554688 6.6875 32 C 6.6875 31.445313 7.136719 31 7.6875 31 Z M 19.21875 34.78125 L 26.9375 34.78125 C 27.492188 34.78125 27.9375 35.226563 27.9375 35.78125 C 27.9375 36.335938 27.492188 36.78125 26.9375 36.78125 L 19.21875 36.78125 C 18.667969 36.78125 18.21875 36.335938 18.21875 35.78125 C 18.21875 35.226563 18.667969 34.78125 19.21875 34.78125 Z M 7.6875 35 L 14.46875 35 C 15.019531 35 15.46875 35.445313 15.46875 36 C 15.46875 36.554688 15.019531 37 14.46875 37 L 7.6875 37 C 7.136719 37 6.6875 36.554688 6.6875 36 C 6.6875 35.445313 7.136719 35 7.6875 35 Z M 19.21875 38.53125 L 26.9375 38.53125 C 27.492188 38.53125 27.9375 38.976563 27.9375 39.53125 C 27.9375 40.085938 27.492188 40.53125 26.9375 40.53125 L 19.21875 40.53125 C 18.667969 40.53125 18.21875 40.085938 18.21875 39.53125 C 18.21875 38.976563 18.667969 38.53125 19.21875 38.53125 Z M 7.6875 39 L 14.46875 39 C 15.019531 39 15.46875 39.445313 15.46875 40 C 15.46875 40.554688 15.019531 41 14.46875 41 L 7.6875 41 C 7.136719 41 6.6875 40.554688 6.6875 40 C 6.6875 39.445313 7.136719 39 7.6875 39 Z"
                                ></path>
                            </svg>

                            <span class="flex-1 ms-3 whitespace-nowrap"
                                >News</span
                            >
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="p-4 sm:ml-64">
            <div
                v-if="$page.props.flash.message"
                class="absolute top-0 right-0 mt-4 mr-4"
            >
                <div
                    class="bg-green-500 text-white px-4 py-2 rounded-md shadow-md"
                >
                    {{ $page.props.flash.message }}
                </div>
            </div>

            <!-- component -->
            <!-- https://dribbble.com/shots/14959823-Dashboard-UI-Elements -->
            <div className="h-screen bg-gray-100 p-6">
                <!-- { /*variation dark set*/ } -->
                <div
                    class="flex bg-white shadow-md justify-start md:justify-center rounded-lg overflow-x-scroll mx-auto py-4 px-2 md:mx-12 mb-10"
                >
                    <div
                        class="flex group hover:bg-purple-500 hover:shadow-lg hover-dark-shadow rounded-full mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 text-sm transition-all group-hover:font-semibold duration-300"
                                >
                                    Sun
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    11
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group hover:bg-purple-500 hover:shadow-lg hover-dark-shadow rounded-full mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 text-sm transition-all group-hover:font-semibold duration-300"
                                >
                                    Mon
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    12
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group hover:bg-purple-500 hover:shadow-lg hover-dark-shadow rounded-full mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 text-sm transition-all font-normal group-hover:font-semibold duration-300"
                                >
                                    Tue
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    13
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group bg-purple-600 shadow-lg dark-shadow rounded-full mx-1 cursor-pointer justify-center relative w-16"
                    >
                        <span class="flex h-2 w-2 absolute bottom-1.5">
                            <span
                                class="animate-ping absolute group-hover:opacity-75 opacity-0 inline-flex h-full w-full rounded-full bg-purple-400"
                            ></span>
                            <span
                                class="relative inline-flex rounded-full h- w-3 bg-purple-100"
                            ></span>
                        </span>
                        <div class="flex items-center px-4 my-2 py-4">
                            <div class="text-center">
                                <p class="text-gray-100 text-sm font-semibold">
                                    Wed
                                </p>
                                <p class="text-gray-100 mt-3 font-bold">14</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group hover:bg-purple-500 hover:shadow-lg hover-dark-shadow rounded-full mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 text-sm transition-all group-hover:font-semibold duration-300"
                                >
                                    Thu
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    15
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group hover:bg-purple-500 hover:shadow-lg hover-dark-shadow rounded-full mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 text-sm transition-all group-hover:font-semibold duration-300"
                                >
                                    Fri
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    16
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group hover:bg-purple-500 hover:shadow-lg hover-dark-shadow rounded-full mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 text-sm transition-all group-hover:font-semibold duration-300"
                                >
                                    Sat
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    17
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- { /*variation dark set*/ } -->
                <div
                    class="flex bg-white shadow-md justify-start md:justify-center rounded-lg overflow-x-scroll mx-auto py-4 px-2 md:mx-12"
                >
                    <div
                        class="flex group hover:bg-purple-500 hover:shadow-lg hover-dark-shadow rounded-lg mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 text-sm transition-all duration-300"
                                >
                                    Sun
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    11
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group hover:bg-purple-500 hover:shadow-lg hover-dark-shadow rounded-lg mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 text-sm transition-all duration-300"
                                >
                                    Mon
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    12
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group hover:bg-purple-500 hover:shadow-lg hover-dark-shadow rounded-lg mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 text-sm transition-all duration-300"
                                >
                                    Tue
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    13
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group bg-purple-600 shadow-lg dark-shadow rounded-lg mx-1 cursor-pointer justify-center relative w-16"
                    >
                        <span class="flex h-3 w-3 absolute -top-1 -right-1">
                            <span
                                class="animate-ping absolute group-hover:opacity-75 opacity-0 inline-flex h-full w-full rounded-full bg-purple-400"
                            ></span>
                            <span
                                class="relative inline-flex rounded-full h-3 w-3 bg-purple-100"
                            ></span>
                        </span>
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p class="text-gray-100 text-sm">Wed</p>
                                <p class="text-gray-100 mt-3 font-bold">14</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group hover:bg-purple-500 hover:shadow-lg hover-dark-shadow rounded-lg mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 text-sm transition-all duration-300"
                                >
                                    Thu
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    15
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group hover:bg-purple-500 hover:shadow-lg hover-dark-shadow rounded-lg mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 text-sm transition-all duration-300"
                                >
                                    Fri
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    16
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group hover:bg-purple-500 hover:shadow-lg hover-dark-shadow rounded-lg mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 text-sm transition-all duration-300"
                                >
                                    Sat
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-gray-100 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    17
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <br /><br />

                <!-- { /*variation light set*/ } -->
                <div
                    class="flex bg-white shadow-md justify-start md:justify-center rounded-lg overflow-x-scroll mx-auto py-4 px-2 md:mx-12"
                >
                    <div
                        class="flex group hover:bg-purple-100 hover:shadow-lg hover-light-shadow rounded-lg mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-purple-900 text-sm transition-all duration-300"
                                >
                                    Sun
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-purple-900 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    11
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group hover:bg-purple-100 hover:shadow-lg hover-light-shadow rounded-lg mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-purple-900 text-sm transition-all duration-300"
                                >
                                    Mon
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-purple-900 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    12
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group hover:bg-purple-100 hover:shadow-lg hover-light-shadow rounded-lg mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-purple-900 text-sm transition-all duration-300"
                                >
                                    Tue
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-purple-900 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    13
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group bg-purple-300 shadow-lg light-shadow rounded-lg mx-1 cursor-pointer justify-center relative w-16 content-center"
                    >
                        <span class="flex h-3 w-3 absolute -top-1 -right-1">
                            <span
                                class="animate-ping absolute group-hover:opacity-75 opacity-0 inline-flex h-full w-full rounded-full bg-purple-400"
                            ></span>
                            <span
                                class="relative inline-flex rounded-full h-3 w-3 bg-purple-500"
                            ></span>
                        </span>
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p class="text-purple-900 text-sm">Wed</p>
                                <p class="text-purple-900 mt-3 font-bold">14</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group hover:bg-purple-100 hover:shadow-lg hover-light-shadow rounded-lg mx-1 transition-all duration-300 content-center cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-purple-900 text-sm transition-all duration-300"
                                >
                                    Thu
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-purple-900 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    15
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group hover:bg-purple-100 hover:shadow-lg hover-light-shadow rounded-lg mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-purple-900 text-sm transition-all duration-300"
                                >
                                    Fri
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-purple-900 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    16
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex group hover:bg-purple-100 hover:shadow-lg hover-light-shadow rounded-lg mx-1 transition-all duration-300 cursor-pointer justify-center w-16"
                    >
                        <div class="flex items-center px-4 py-4">
                            <div class="text-center">
                                <p
                                    class="text-gray-900 group-hover:text-purple-900 text-sm transition-all duration-300"
                                >
                                    Sat
                                </p>
                                <p
                                    class="text-gray-900 group-hover:text-purple-900 mt-3 group-hover:font-bold transition-all duration-300"
                                >
                                    17
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
