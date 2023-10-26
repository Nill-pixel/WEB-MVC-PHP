<?php

require_once('layout/layout.php')
    ?>
<div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:pl-72">
    <div class="bg-gradient-to-r from-orange-400 to-blue-300 rounded-md">
        <div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 mx-auto">
            <!-- Grid -->
            <div class="grid justify-center md:grid-cols-2 md:justify-between md:items-center gap-2">
                <div class="text-center md:text-left md:order-2 md:flex md:justify-end md:items-center">
                    <p class="mr-5 inline-block text-sm font-semibold text-white">
                        Ready to get started?
                    </p>
                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border-2 border-white font-medium text-white hover:bg-white hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 transition-all text-sm"
                        href="add">
                        Add a task
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
            <div class="grid sm:grid-cols-2 lg:grid-cols-1 gap-1 sm:gap-6">
                <div class="bg-white overflow-hidden shadow rounded-lg border">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            User Profile
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            This is some information about the user.
                        </p>
                    </div>
                    <form action="" method="post">
                        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                            <dl class="sm:divide-y sm:divide-gray-200">
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Full name
                                    </dt>
                                    <input placeholder="<?php echo $user['name']; ?>" type="text"
                                        class="bg-gray-50 border border-gray-30 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                    </input>
                                </div>
                                <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Email address
                                    </dt>
                                    <input placeholder="<?php echo $user['email']; ?>" type="text"
                                        class="bg-gray-50 border border-gray-30 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                                    </input>
                                </div>
                            </dl>
                        </div>
                    </form>
                </div>
                <button type="submit"
                    class="text-white bg-gradient-to-r from-blue-400 via-orange-500 to-blue-300 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    Change
                </button>
                <a href="/app/delete/<?php echo $user['id'] ?>"
                    class="text-white bg-gradient-to-r from-orange-400 via-red-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    Delete
                </a>

                <div id="hs-cookies"
                    class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
                    <div
                        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                        <div class="relative flex flex-col bg-white shadow-lg rounded-xl dark:bg-gray-800">
                            <div class="absolute top-2 right-2">
                                <button type="button"
                                    class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800"
                                    data-hs-overlay="#hs-cookies">
                                    <span class="sr-only">Close</span>
                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                            fill="currentColor" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>