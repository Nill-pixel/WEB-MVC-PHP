<?php
require_once('layout/layout.php')
    ?>

<div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:pl-72">
    <div class="bg-gradient-to-r from-blue-600 to-blue-300 rounded-md">
        <div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 mx-auto">
            <!-- Grid -->
            <div class="grid justify-center md:grid-cols-2 md:justify-between md:items-center gap-2">
                <div class="text-center md:text-left md:order-2 md:flex md:justify-end md:items-center">
                    <p class="mr-5 inline-block text-sm font-semibold text-white">
                        Tasks
                    </p>
                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border-2 border-white font-medium text-white hover:bg-white hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition-all text-sm"
                        href="todo">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        Back to home
                    </a>
                </div>
                <!-- End Col -->

                <div class="flex items-center">
                    <div
                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md font-medium text-white hover:bg-white/[.1] focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition-all text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                        </svg>

                        My Day
                        </a>
                        <span class="inline-block border-r border-white/[.3] w-px h-5 mx-2"></span>
                        <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md font-medium text-white hover:bg-white/[.1] focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition-all text-sm"
                            href="#">
                            Wednesday 18 October
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-5xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="relative overflow-hidden">
                <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-24">
                    <div class="text-center">
                        <div class="mt-7 sm:mt-12 mx-auto max-w-xl relative">
                            <form method="post" action="/app/addTask">
                                <div
                                    class="relative z-10 flex space-x-3 p-3 bg-white border rounded-lg shadow-lg shadow-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:shadow-gray-900/[.2]">
                                    <div class="flex-[1_0_0%]">
                                        <label for="hs-search-article-1"
                                            class="block text-sm text-gray-700 font-medium dark:text-white"><span
                                                class="sr-only">Add a task</span></label>
                                        <input type="text" name="name" id="hs-search-article-1"
                                            class="p-3 block w-full border-transparent rounded-md focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-400"
                                            required placeholder="Add a task">
                                    </div>
                                    <div class="flex-[0_0_auto]">
                                        <button type="submit"
                                            class="p-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6v12m6-6H6" />
                                            </svg>

                                        </button>
                                    </div>
                                </div>
                            </form>

                            <div class="hidden md:block absolute top-0 right-0 -translate-y-12 translate-x-20">
                                <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor"
                                        stroke-width="10" stroke-linecap="round" />
                                    <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5"
                                        stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                    <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874"
                                        stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                </svg>
                            </div>

                            <div class="hidden md:block absolute bottom-0 left-0 translate-y-10 -translate-x-32">
                                <svg class="w-40 h-auto text-cyan-500" width="347" height="188" viewBox="0 0 347 188"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4 82.4591C54.7956 92.8751 30.9771 162.782 68.2065 181.385C112.642 203.59 127.943 78.57 122.161 25.5053C120.504 2.2376 93.4028 -8.11128 89.7468 25.5053C85.8633 61.2125 130.186 199.678 180.982 146.248L214.898 107.02C224.322 95.4118 242.9 79.2851 258.6 107.02C274.299 134.754 299.315 125.589 309.861 117.539L343 93.4426"
                                        stroke="currentColor" stroke-width="7" stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>