<!doctype html>
<html class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
</head>

<body class="dark:bg-slate-900 bg-gray-100 flex h-full items-center py-16">
    <main class="w-full max-w-md mx-auto p-6">
        <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Sign up</h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        Already have an account?
                        <a class="text-blue-600 decoration-2 hover:underline font-medium" href="signIn">
                            Sign in here
                        </a>
                    </p>
                </div>

                <div class="mt-5">
                    <div
                        class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 before:mr-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ml-6 dark:text-gray-500 dark:before:border-gray-600 dark:after:border-gray-600">
                        Or</div>

                    <form method="post" action="/app/signUpUser">
                        <div class="grid gap-y-4">
                            <div>
                                <label for="name" class="block text-sm mb-2 dark:text-white">User Name</label>
                                <div class="relative">
                                    <input type="text" id="name" name="name"
                                        class="py-3 px-4 block w-full border rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                        required aria-describedby="name-error">
                                    <div
                                        class="hidden absolute inset-y-0 right-0 items-center pointer-events-none pr-3">
                                        <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor"
                                            viewBox="0 0 16 16" aria-hidden="true">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a valid
                                    email address so we can get back to you</p>
                            </div>
                            <div>
                                <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                                <div class="relative">
                                    <input type="email" id="email" name="email"
                                        class="py-3 px-4 block w-full border rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                        required aria-describedby="email-error">
                                    <div
                                        class="hidden absolute inset-y-0 right-0 items-center pointer-events-none pr-3">
                                        <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor"
                                            viewBox="0 0 16 16" aria-hidden="true">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a valid
                                    email address so we can get back to you</p>
                            </div>

                            <div>
                                <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                                <div class="relative">
                                    <input type="password" id="password" name="password"
                                        class="py-3 px-4 block w-full border rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                        required aria-describedby="password-error">
                                    <div
                                        class="hidden absolute inset-y-0 right-0 items-center pointer-events-none pr-3">
                                        <svg class="h-5 w-5 text-red-500" width="16" height="16" fill="currentColor"
                                            viewBox="0 0 16 16" aria-hidden="true">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="hidden text-xs text-red-600 mt-2" id="password-error">8+ characters required
                                </p>
                            </div>

                            <div class="flex items-center">
                                <div class="flex">
                                    <input required id="remember-me" name="remember-me" type="checkbox"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 pointer-events-none focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                </div>
                                <div class="ml-3">
                                    <label for="remember-me" class="text-sm dark:text-white">I accept the <a
                                            class="text-blue-600 decoration-2 hover:underline font-medium"
                                            href="#">Terms and Conditions</a></label>
                                </div>
                            </div>

                            <button type="submit"
                                class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Sign
                                up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="node_modules\preline\dist\preline.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>