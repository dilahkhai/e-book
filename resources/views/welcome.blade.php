@extends('layouts.app_user')

@section('main')
    <body>
        <!-- <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            <h2>Download The Ultimate Encyclopedia of Regression: 1000 Models Explained</h2>
            <p>Please insert the code number available in your e-book to freely download:</p>
            <input type="text" id="codeInput" placeholder="Enter Code">
            
            <p>Masukkan captcha:</p>
            <div id="captchaText"></div>
            <input type="text" id="captchaInput" placeholder="Enter Captcha">
            
            <br><br>
            <button onclick="validateCode()">Submit</button>
            
            <div id="downloadSection">
                <h3>Download Resource Book</h3>
                <a href="img/resource-book.pdf" download="regression-e-book">Download</a>
            </div>
        </div> -->
        <div class="mx-w-sm px-4 p-8 py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-lg text-center">
                <h1 class="text-4xl font-bold sm:text-3xl">Get Your E-Book Resource Now!</h1>
                <p class="mt-4 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et libero nulla eaque error neque ipsa culpa autem, at itaque nostrum!</p>

                <div class="mx-auto mt-8 mb-0 max-w-md space-y-4">
                    <div>
                        <div class="relative">
                            <input type="email" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-xs" placeholder="Enter email"/>

                            <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="size-4 text-gray-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                                />
                            </svg>
                            </span>
                        </div>
                    </div>

                    <div>
                        <div class="relative">
                            <input
                            type="password"
                            class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-xs"
                            placeholder="Enter password"
                            />

                            <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="size-4 text-gray-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                                <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                />
                            </svg>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="mx-auto mt-8 mb-0 max-w-md space-y-4">
                    <input class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-xs" type="text" id="codeInput" placeholder="Enter Code">
                </div>
                
                <div class="mx-auto mt-8 mb-0 max-w-md space-y-4">
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-xl bg-gray-400 border rounded-e-0 border-gray-300 border-e-0 rounded-s-md" id="captchaText">
                        </span>
                        <input type="text" id="captchaInput" class="rounded-e-0 rounded-s-md border-gray-200 p-4 pe-12 text-sm shadow-xs block flex-1 min-w-0 w-full text-sm border-gray-300" placeholder="Enter Captcha">
                    </div>
                    <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" onclick="validateCode()">Submit</button>
                </div>
                
                
                <div id="downloadSection">
                    <h3>Download Resource Book</h3>
                    <a href="img/resource-book.pdf" download="regression-e-book">Download</a>
                </div>
            </div>

            <!-- <form action="#" class="mx-auto mt-8 mb-0 max-w-md space-y-4">
                

                <div class="flex items-center justify-between">
                    <p class="text-sm text-gray-500">No account?
                        <a class="underline" href="#">Sign up</a>
                    </p>

                    <button type="submit" class="inline-block rounded-lg bg-blue-500 px-5 py-3 text-sm font-medium text-white">
                        Sign in
                    </button>
                </div>
            </form> -->
        </div>
    </body>
@endsection