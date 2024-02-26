<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.js" defer></script>
</head>

<body>
    <!-- Navigation -->
    <!-- Dropdown Blade Component -->
    @props(['trigger' => ''])

    <nav x-data="{ open: false }" class="bg-white  border-b fixed top-9 lg:top-8 left-0 right-0 z-50">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-2 lg:px-2">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">

                        <div class="flex justify-center"><img src="../favicon3.png" alt="" class="w-[5rem]" /></div>
                    </div>
                </div>
             <div x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open" id="dropdownMenuIconHorizontalButton" class="mt-3 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md bg-white  sm:text-black lg:text:black focus:outline-none " type="button">
                        Home <div class="ml-1 ">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button> <!-- Dropdown menu -->
                    <div x-show="open" id="dropdownDotsHorizontal" class="z-10 absolute right-0 mt-5 bg-white divide-y  rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-black-700 dark:text-black-200" aria-labelledby="dropdownMenuIconHorizontalButton">
                            <li>
                                <a href="/" class="block px-4 py-2 hover:bg-black-80 dark:hover:bg-gray-600 dark:hover:text-black">Home</a>
                            </li>
                            <li>
                                <a href="/guides" class="block px-4 py-2 hover:bg-black-80 dark:hover:bg-gray-600 dark:hover:text-black">Tour Guide Hier</a>
                            </li>
                            <li>
                                <a href="/register" class="block px-4 py-2 hover:bg-black-80 dark:hover:bg-gray-600 dark:hover:text-black">Tour Guide Register</a>
                            </li>
                            <li>
                                <a href="/login" class="block px-4 py-2 hover:bg-black-80 dark:hover:bg-gray-600 dark:hover:text-black">Tour Guide Login</a>
                            </li>
                            <li>
                                <a href="/FeedbackGuide" class="block px-4 py-2 hover:bg-black-80 dark:hover:bg-gray-600 dark:hover:text-black">Feedback Guide</a>
                            </li>
                            <li>
                                <a href="https://transport.getyourtourguideuae.com/login" class="block px-4 py-2 hover:bg-black-80 dark:hover:bg-gray-600 dark:hover:text-black">Agent Login</a>
                            </li>
                            <li>
                                <a href="/aboutus" class="block px-4 py-2 hover:bg-black-80 dark:hover:bg-gray-600 dark:hover:text-black">About Us</a>
                            </li>
                            <li>
                                <a href="/ourservices" class="block px-4 py-2 hover:bg-black-80 dark:hover:bg-gray-600 dark:hover:text-black">Our Services</a>
                            </li>
                            <li>
                                <a href="/companyFeedback" class="block px-4 py-2 hover:bg-black-80 dark:hover:bg-gray-600 dark:hover:text-black">Company Feedback</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="./gr.pdf" class="block px-4 py-2 text-sm text-black-700 hover-bg-gray-100 dark:hover-bg-gray-600 dark:text-black-200 dark:hover-text-black">Guide Register?</a>
                            <a href="./hireG.pdf" class="block px-4 py-2 text-sm text-black-700 hover-bg-gray-100 dark:hover-bg-gray-600 dark:text-black-200 dark:hover-text-black">Guide Hier ?</a>
                            <a href="./Sch.docx" class="block px-4 py-2 text-sm text-black-700 hover-bg-gray-100 dark:hover-bg-gray-600 dark:text-black-200 dark:hover-text-black">Schedule Format</a>
                        </div>
                      

                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>