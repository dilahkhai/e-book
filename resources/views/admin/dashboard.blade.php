@extends('layouts.app')

@section('main')

<body class="bg-gray-50 dark:bg-gray-800">
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main>
                <div class="px-4 pt-6">
                    <div class="grid gap-4 xl:grid-cols-2 mb-4">
                        <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <h3 class="flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">
                                List of Books
                            </h3>
                            <div class="border-t border-gray-200 dark:border-gray-600">
                                <div>
                                    @if ($books->isEmpty())
                                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <li class="py-3 sm:py-4 mb-4">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center min-w-0">
                                                        <div class="ml-3">
                                                            <p class="text-center py-4">Tidak ada e-book yang tersedia.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    @else
                                        @foreach ($books as $book)
                                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <li class="py-3 sm:py-4 mb-4">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center min-w-0">
                                                        <img class="flex-shrink-0 w-10 h-10" src="{{ asset('storage/' . $book->image) }}">
                                                        <div class="ml-3 justify-between">
                                                            <p class="font-medium text-gray-900 truncate dark:text-white">
                                                                {{$book->title}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        @endforeach
                                    @endif 
                                </div>
                            </div>
                            <div class="flex items-center justify-between pt-3 mt-5 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                                <div class="flex-shrink-0">
                                    <a href="{{ route('books.index') }}"
                                        class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                        Full List
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
                                List of Agents
                            </h3>
                            <div class="border-t border-gray-200 dark:border-gray-600">
                                <div>
                                    @if ($agents->isEmpty())
                                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <li class="py-3 sm:py-4 mb-4">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center min-w-0">
                                                        <div class="ml-3">
                                                            <p class="text-center py-4">Tidak ada agent yang tersedia.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    @else
                                        @foreach ($agents as $agent)
                                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <li class="py-3 sm:py-4 mb-4">
                                                <a href=""></a>
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-shrink-0">
                                                        <img class="w-8 h-8 rounded-full"
                                                            src="https://flowbite-admin-dashboard.vercel.app/images/users/neil-sims.png"
                                                            alt="Neil image">
                                                    </div>
                                                    <div class="flex-1 min-w-0">
                                                        
                                                        <p class="font-medium text-gray-900 truncate dark:text-white">
                                                            {{ $agent->agent }}
                                                        </p>
                                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                            {{ $agent->agent_email }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        @endforeach
                                    @endif 
                                </div>
                            </div>
                            <div class="flex items-center justify-between pt-3 mt-5 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                                <div class="flex-shrink-0">
                                    <a href="{{ route('books.index') }}"
                                        class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                        Full List
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
                    <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <h3 class="flex items-center mb-4 text-lg font-semibold text-gray-900 dark:text-white">
                                List of Agents
                            </h3>
                            <div class="border-t border-gray-200 dark:border-gray-600">
                                <div>
                                    @if ($agents->isEmpty())
                                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <li class="py-3 sm:py-4 mb-4">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center min-w-0">
                                                        <div class="ml-3">
                                                            <p class="text-center py-4">Tidak ada agent yang tersedia.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    @else
                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    Book Title
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Agent
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Ref Code
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Cust Name
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Cust Email
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Cust Organization
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Downloaded Date
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($downloadedBooks->isEmpty())
                                                <tr>
                                                    <td colspan="3" class="text-center py-4">Tidak ada history yang tersedia.</td>
                                                </tr>
                                            @else
                                                @foreach($downloadedBooks as $data)
                                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                                        <th scope="row" class="flex gap-2 px-6 py-4 font-medium text-xl text-gray-900 whitespace-nowrap dark:text-white">
                                                            <img class="flex-shrink-0 w-10 h-10"
                                                                src="{{ asset('storage/' . $data->book->image) }}"
                                                                alt="">
                                                            {{ $data->book->title }}
                                                        </th>
                                                        <td class="px-6 py-4 font-small text-xl text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $data->agent->agent }}
                                                        </td>
                                                        <td class="px-6 py-4 font-small text-xl text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $data->code_id }}
                                                        </td>
                                                        <td class="px-6 py-4 font-small text-xl text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $data->cust_name }}
                                                        </td>
                                                        <td class="px-6 py-4 font-small text-xl text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $data->cust_email }}
                                                        </td>
                                                        <td class="px-6 py-4 font-small text-xl text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $data->cust_org }}
                                                        </td>
                                                        <td class="px-6 py-4 font-small text-xl text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $data->downloaded_date }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                    @endif 
                                </div>
                            </div>
                            <div class="flex items-center justify-between pt-3 mt-5 border-t border-gray-200 sm:pt-6 dark:border-gray-700">
                                <div class="flex-shrink-0">
                                    <a href="{{ route('books.index') }}"
                                        class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                                        Full List
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
            </main>
            <p class="my-10 text-sm text-center text-gray-500">
                &copy; <a href="#" class="hover:underline"
                    target="_blank">Ourtoga</a>. All rights reserved.
            </p>
        </div>
    </div>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://flowbite-admin-dashboard.vercel.app//app.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
</body>
@endsection