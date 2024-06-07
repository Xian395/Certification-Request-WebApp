<script setup>
import AdminAuthenticatedLayout from "@/Layouts/AdminAuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

</script>

<template>
    <Head title=" Admin Dashboard" />

    <AdminAuthenticatedLayout>
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-white border rounded shadow p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded p-3 bg-green-600">
                                <i
                                    class="fa fa-wallet fa-2x fa-fw fa-inverse"
                                ></i>
                            </div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <Link :href="route('request.index')">
                                <h5 class="font-bold uppercase text-gray-500">
                                    Request Management
                                </h5>
                            </Link>

                            <h3 class="font-bold text-3xl">
                                <br />
                                <span class="text-green-500"
                                    ><i class="fas fa-caret-up"></i
                                ></span>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-white border rounded shadow p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded p-3 bg-pink-600">
                                <i
                                    class="fas fa-users fa-2x fa-fw fa-inverse"
                                ></i>
                            </div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <Link :href="route('users.index')">
                                <h5 class="font-bold uppercase text-gray-500">
                                    User Management
                                </h5>
                            </Link>
                            <h3 class="font-bold text-3xl">
                                <br />
                                <span class="text-pink-500"
                                    ><i class="fas fa-exchange-alt"></i
                                ></span>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-white border rounded shadow p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded p-3 bg-yellow-600">
                                <i
                                    class="fas fa-user-plus fa-2x fa-fw fa-inverse"
                                ></i>
                            </div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <Link :href="route('form')">
                                <h5 class="font-bold uppercase text-gray-500">
                                    Form Management
                                </h5>
                            </Link>

                            <h3 class="font-bold text-3xl">
                                <br />
                                <span class="text-yellow-600"
                                    ><i class="fas fa-caret-up"></i
                                ></span>
                            </h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-white border rounded shadow p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded p-3 bg-red-600">
                                <i
                                    class="fas fa-server fa-2x fa-fw fa-inverse"
                                ></i>
                            </div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <Link :href="route('transaction')">
                                <h5 class="font-bold uppercase text-gray-500">
                                    Transaction
                                </h5>
                                <br>
                            </Link>
                            <h3 class="font-bold text-3xl"></h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-3"></div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <!-- <div class="bg-white border rounded shadow p-2">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded p-3 bg-red-600">
                                <i
                                    class="fas fa-inbox fa-2x fa-fw fa-inverse"
                                ></i>
                            </div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="font-bold uppercase text-gray-500">
                                Issues
                            </h5>
                            <h3 class="font-bold text-3xl">
                                3
                                <span class="text-red-500"
                                    ><i class="fas fa-caret-up"></i
                                ></span>
                            </h3>
                        </div>
                    </div>
                </div> -->
                <!--/Metric Card-->
            </div>
        </div>

        <!-- <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">
                <div
                    class="bg-blue-500 overflow-hidden shadow-sm sm:rounded-lg mb-6 flex-grow mr-4"
                >
                    <div class="p-8 text-gray-900" style="text-align: center">
                        <h1 class="font-bold">Request Management</h1>

                        <br />

                        <div>
                            <Link
                                :href="route('certificate')"
                                class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded"
                                >More Info</Link
                            >
                        </div>
                    </div>
                </div>
                <div
                    class="bg-blue-500 overflow-hidden shadow-sm sm:rounded-lg mb-6 flex-grow mr-4"
                >
                    <div class="p-8 text-gray-900" style="text-align: center">
                        <h1 class="font-bold">User Management</h1>
                        <div>
                            <a href="html">
                                <button
                                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded"
                                >
                                    <div>More Info</div>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-blue-500 overflow-hidden shadow-sm sm:rounded-lg mb-6 flex-grow mr-4"
                >
                    <div class="p-8 text-gray-900" style="text-align: center">
                        <h1 class="font-bold">Transaction</h1>
                        <div>
                            <a href="html">
                                <button
                                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded"
                                >
                                    <div>More Info</div>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="row">
            <div class="col">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title">{{ $totalPrecription }}</h5>
                        <p class="card-text">Total Prescription</p>
                    </div>

                    <div class="card-footer text-center font-weight-bold">
                        <a
                            href="{{ url('precribtion-history') }}"
                            class="text-white"
                            ><span
                                >More Info
                                <i
                                    class="fa fa-arrow-circle-right"
                                    aria-hidden="true"
                                ></i></span
                        ></a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title">{{ $accept }}</h5>
                        <p class="card-text">Accept Prescription</p>
                    </div>

                    <div class="card-footer text-center font-weight-bold">
                        <a href="" class="text-white"
                            ><span
                                >More Info
                                <i
                                    class="fa fa-arrow-circle-right"
                                    aria-hidden="true"
                                ></i></span
                        ></a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <h5 class="card-title">{{ $reject }}</h5>
                        <p class="card-text">Reject Prescription</p>
                    </div>

                    <div class="card-footer text-center font-weight-bold">
                        <a href="" class="text-white"
                            ><span
                                >More Info
                                <i
                                    class="fa fa-arrow-circle-right"
                                    aria-hidden="true"
                                ></i></span
                        ></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-4">
                <div class="card bg-warning text-dark">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pending }}</h5>
                        <p class="card-text">Prepared Quotation</p>
                    </div>

                    <div class="card-footer text-center font-weight-bold">
                        <a
                            href="{{url('prepared-quotation')}}"
                            class="text-dark"
                            ><span
                                >More Info
                                <i
                                    class="fa fa-arrow-circle-right"
                                    aria-hidden="true"
                                ></i></span
                        ></a>
                    </div>
                </div>
            </div>
        </div> -->
    </AdminAuthenticatedLayout>
</template>
