<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-end">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Dashboard</Link
            >

            <template v-else>
                <Link
                    v-if="canLogin"
                    :href="route('login')"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mx-2 my-1"
                    >Login</Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 mx-2 my-1"
                    >Register</Link
                >
            </template>
        </div>

        <body
            class="leading-normal tracking-normal text-indigo-400 m-6 bg-cover bg-fixed"
            style="background-image: url('header.png')"
        >
            <div class="h-full">
                <!--Nav-->
                <!-- <div class="w-full container mx-auto">
                    <div class="w-full flex items-center justify-between">
                        <a
                            class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                            href="#"
                        >
                            Wel<span
                                class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500"
                                >come</span
                            >
                        </a>
                    </div>
                </div> -->

                <!--Main-->
                <div
                    class="container pt-24 md:pt-36 mx-auto flex flex-wrap flex-col md:flex-row items-center"
                >
                    <!--Left Col-->
                    <div
                        class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden"
                    >
                        <h1
                            class="my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left"
                        >
                            <!-- Main -->
                            <span
                                class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500"
                            >
                                Good Day!
                            </span>
                            <!-- to sell yourself! -->
                        </h1>
                        <p
                            class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left"
                        >
                            Sub-hero message, not too long and not too short.
                            Make it just right!
                        </p>

                        <!-- <form
                            class="bg-gray-900 opacity-75 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4"
                        >
                            <div class="mb-4">
                                <label
                                    class="block text-blue-300 py-2 font-bold mb-2"
                                    for="emailaddress"
                                >
                                    Signup for our newsletter
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                                    id="emailaddress"
                                    type="text"
                                    placeholder="you@somewhere.com"
                                />
                            </div>

                            <div class="flex items-center justify-between pt-4">
                                <button
                                    class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                                    type="button"
                                >
                                    Sign Up
                                </button>
                            </div>
                        </form> -->
                    </div>

                    <!--Right Col-->
                    <div class="w-full xl:w-3/5 p-12 overflow-hidden">
                        <img
                            class="mx-auto w-full md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-700 ease-in-out hover:rotate-6"
                            src="macbook.svg"
                        />
                    </div>

                    <div class="mx-auto md:pt-16">
                        <p
                            class="text-blue-400 font-bold pb-8 lg:pb-6 text-center"
                        >
                            Download our app:
                        </p>
                        <div
                            class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in"
                        >
                            <img
                                src="App Store.svg"
                                class="h-12 pr-12 transform hover:scale-125 duration-300 ease-in-out"
                            />
                            <img
                                src="Play Store.svg"
                                class="h-12 transform hover:scale-125 duration-300 ease-in-out"
                            />
                        </div>
                    </div>

                    <!--Footer-->
                    <div
                        class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in"
                    >
                        <a
                            class="text-gray-500 no-underline hover:no-underline"
                            href="#"
                            >&copy;2024</a
                        >

                        <a
                            class="text-gray-500 no-underline hover:no-underline"
                            href="https://www.tailwindtoolbox.com"
                        ></a>
                    </div>
                </div>
            </div>
        </body>
    </div>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
