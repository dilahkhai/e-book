@extends('layouts.app')

@section('main')


<body class="bg-gray-300 dark:bg-gray-800">
    <div class="flex pt-16 overflow-hidden bg-gray-50">
        <div id="main-content" class="relative p-4 w-full h-full overflow-y-auto bg-gray-300 lg:ml-64">
            <main>
                <div class="relative overflow-x-auto">
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
                                        <th scope="row" class="flex gap-2 px-6 py-4 text-xl text-gray-900 whitespace-nowrap dark:text-white">
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
                </div>
            </main>
        </div>
    </div>
</body>


@endsection