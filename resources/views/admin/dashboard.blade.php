@extends('layouts.app')

@section('main')

<body class="bg-gray-50 dark:bg-gray-800">
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main>
                <div class="px-4 pt-6">
                    <div class="grid gap-4 xl:grid-cols-2 ">
                        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <h3 class="flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">
                                Statistics this month
                            </h3>
                            <div class="border-t border-gray-200 dark:border-gray-600">
                                <div>
                                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center min-w-0">
                                                    <img class="flex-shrink-0 w-10 h-10"
                                                        src="https://flowbite-admin-dashboard.vercel.app/images/products/iphone.png"
                                                        alt="imac image">
                                                    <div class="ml-3">
                                                        <p class="font-medium text-gray-900 truncate dark:text-white">
                                                            iPhone 14 Pro
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex items-center justify-between pt-3 mt-5 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                                <div class="flex-shrink-0">
                                    <a href="#"
                                        class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                        Full Report
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <h3 class="flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">
                                Statistics this month
                            </h3>
                            <div class="border-t border-gray-200 dark:border-gray-600">
                                <div>
                                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                        <li class="py-3 sm:py-4">
                                            <div class="flex items-center space-x-4">
                                                <div class="flex-shrink-0">
                                                    <img class="w-8 h-8 rounded-full"
                                                        src="https://flowbite-admin-dashboard.vercel.app/images/users/neil-sims.png"
                                                        alt="Neil image">
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <p class="font-medium text-gray-900 truncate dark:text-white">
                                                        Neil Sims
                                                    </p>
                                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                        email@flowbite.com
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex items-center justify-between pt-3 mt-5 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                                <div class="flex-shrink-0">
                                    <a href="#"
                                        class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                        Full Report
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3">
                        <div
                            class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <div class="w-full">
                                <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">New products</h3>
                                <span
                                    class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">2,340</span>
                                <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                                    <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                            </path>
                                        </svg>
                                        12.5%
                                    </span>
                                    Since last month
                                </p>
                            </div>
                            <div class="w-full" id="new-products-chart"></div>
                        </div>
                        <div
                            class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <div class="w-full">
                                <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Users</h3>
                                <span
                                    class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">2,340</span>
                                <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
                                    <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z">
                                            </path>
                                        </svg>
                                        3,4%
                                    </span>
                                    Since last month
                                </p>
                            </div>
                            <div class="w-full" id="week-signups-chart"></div>
                        </div>
                        <div
                            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <div class="w-full">
                                <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Audience by age
                                </h3>
                                <div class="flex items-center mb-2">
                                    <div class="w-16 text-sm font-medium dark:text-white">50+</div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                        <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500"
                                            style="width: 18%"></div>
                                    </div>
                                </div>
                                <div class="flex items-center mb-2">
                                    <div class="w-16 text-sm font-medium dark:text-white">40+</div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                        <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500"
                                            style="width: 15%"></div>
                                    </div>
                                </div>
                                <div class="flex items-center mb-2">
                                    <div class="w-16 text-sm font-medium dark:text-white">30+</div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                        <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500"
                                            style="width: 60%"></div>
                                    </div>
                                </div>
                                <div class="flex items-center mb-2">
                                    <div class="w-16 text-sm font-medium dark:text-white">20+</div>
                                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                                        <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500"
                                            style="width: 30%"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="traffic-channels-chart" class="w-full"></div>
                        </div>
                    </div> -->
                    <!-- 2 columns -->
                </div>
            </main>
            <p class="my-10 text-sm text-center text-gray-500">
                &copy; <a href="https://flowbite.com/" class="hover:underline"
                    target="_blank">Ourtoga</a>. All rights reserved.
            </p>

        </div>

    </div>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://flowbite-admin-dashboard.vercel.app//app.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
</body>
@endsection