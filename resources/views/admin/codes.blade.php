@extends('layouts.app')

@section('main')


<body class="bg-gray-300 dark:bg-gray-800">
    <div class="flex pt-16 overflow-hidden bg-gray-50">
        <div id="main-content" class="relative p-4 w-full h-full overflow-y-auto bg-gray-300 lg:ml-64">
            <main>
                <div class="relative overflow-x-auto">
                    <div class="mb-4">
                        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                        + Code
                        </button>
                        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                            Generate New Code
                                        </h3>
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form action="{{ route('codes.store') }}" method="POST" class="p-4 md:p-5">
                                        @csrf
                                        <div class="grid gap-4 mb-4 grid-cols-2">
                                            <div class="col-span-2">
                                                <label for="books_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Book</label>
                                                <select id="books_id" name="books_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option selected>Choose a book</option>
                                                    @if ($books->isEmpty())
                                                        <option value="">Tidak Ada Buku Yang Tersedia</option>
                                                    @else
                                                        @foreach($books as $book)
                                                        <option value="{{ $book->id }}">{{ $book->title }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1">
                                                <label for="agent_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Book</label>
                                                <select id="agent_id" name="agent_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    <option selected>Choose an agent</option>
                                                    @if ($agents->isEmpty())
                                                        <option value="">Tidak Ada Agent Yang Tersedia</option>
                                                    @else
                                                        @foreach($agents as $agent)
                                                        <option value="{{ $agent->id }}">{{ $agent->agent }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                            Generate Code
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
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
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($codes->isEmpty())
                                <tr>
                                    <td colspan="3" class="text-center py-4">Tidak ada code yang tersedia.</td>
                                </tr>
                            @else
                                @foreach($codes as $code)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                        <th scope="row" class="flex gap-2 px-6 py-4 font-medium text-xl text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $code->book->title }}
                                        </th>
                                        <td class="px-6 py-4 font-medium text-xl text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $code->agent->agent }}
                                        </td>
                                        <td class="px-6 py-4 font-medium text-xl text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $code->code }}
                                        </td>
                                        <td class="flex gap-2 px-6 py-4">
                                            <div class="col-auto">
                                                <form action="{{ route('codes.destroy', $agent->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="relative inline-block">
                                                        <button type="submit" class="bg-danger inline-flex rounded text-light font-semibold whitespace-nowrap py-2 px-2.5">
                                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
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