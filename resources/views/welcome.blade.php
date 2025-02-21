@extends('layouts.app_user')

@section('main')
    <div class="mx-auto max-w-lg px-4 p-8 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg text-center">
            <h1 class="text-4xl font-bold sm:text-3xl">Get Your E-Book Resource Now!</h1>
            <p class="mt-4 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla eaque error neque ipsa culpa autem, at itaque nostrum!</p>
        </div>
        <div class="relative p-4 md:p-5">
            <form action="{{ route('cust.download') }}" method="POST">
                @csrf
                <div class="relative p-4 md:p-5">
                    <div class="mb-6">
                        <label for="cust_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" id="cust_name" name="cust_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="cust_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="text" id="cust_email" name="cust_email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <label for="cust_org" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Organization</label>
                        <input type="text" id="cust_org" name="cust_org" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="max-w-sm mx-auto mb-6">
                        <label for="books_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                        <select id="books_id" name="books_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose e-book</option>
                            @if ($codes->isEmpty())
                                <option value="">Tidak Ada Buku Yang Tersedia</option>
                            @else
                                @foreach($codes as $code)
                                    <option value="{{ $code->books_id }}">{{ $code->book->title }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="code_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ref Code</label>
                        <input type="text" id="code_id" name="code_id" placeholder="Enter Code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <div class="mb-6">
                        <div class="flex">
                            <span class="inline-flex items-center px-3 text-md text-gray-200 bg-gray-600 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md" id="captchaText"></span>
                            <input type="text" id="captchaInput" class="rounded-e-0 rounded-s-md border-gray-200 p-4 pe-12 text-sm shadow-xs block flex-1 min-w-0 text-sm border-gray-300" placeholder="Enter Captcha">
                            <button class="inline-flex items-center px-3 text-md text-gray-200 bg-gray-600 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md" onclick="validateCode(event)">Check</button>
                        </div>
                        <p id="resultMessage"></p>
                    </div>

                    <button id="submitButton" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" disabled>Login to your account</button>
                </div>
            </form>
        </div>
    </div>
@endsection