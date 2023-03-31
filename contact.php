<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Glow Residence Apartement</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradiant-to-r from-gray-100 to gray-300">
        <nav x-data="{ isOpen: false }" class="container p-6 lg:flex lg:items-center lg:justify-between fixed top-0 left-0 z-0 w-full border-b border-gray-200 bg-white py-2.5 ">
        <div class="flex items-center justify-between">
        <a href="http://localhost/resindenceapartement/home.php">
        <img src="logo.png" width="50" alt="logo">
        </a>
        <div>
            <a class="text-2xl font-bold text-gray-800 hover:textgray-700 dark:text-white dark:hover:text-gray-300 lg:text-3xl" href="home.php">Glow Residence Apartement</a>
            </div>
        </div>
        <div class="flex flex-col space-y-4 lg:mt-0 lg:flex-row lg:space-y-0">
        <button class="bg-transparent hover:bg-gray-200 py-2 px-4 hover:border-transparent rounded">
        <a class="text-gray-700" href="http://localhost/resindenceapartement/home.php">Home</a>
        </button>
        <button class="bg-transparent hover:bg-gray-200 py-2 px-4 hover:border-transparent rounded">
            <a class="text-gray-700" href="http://localhost/resindenceapartement/about_us.php">About Us</a>
        </button>
        <button class="bg-transparent hover:bg-gray-200 py-2 px-4 hover:border-transparent rounded">
            <a class="text-gray-700" href="http://localhost/resindenceapartement/contact.php">Contact</a>
        </button>
        </div>
            <a class="mt-4 block h-10 transform rounded-md border px-5 py-2 text-center text-sm capitalize text-gray-700 transitioncolors duration-300 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 lg:mt-0 lg:w-auto" href="http://localhost/resindenceapartement/login.php"> Login </a>
        </div>
        </nav>
    <div class="mx-auto max-w-lg">
    <h1 class="text-3x1 font-bold- text-grey-800 dark:text-while md:text-4x1">Contact Us</h1>
    

<style>
    :root {
        --main-color: #4a76a8;
    }

    .bg-main-color {
        background-color: var(--main-color);
    }

    .text-main-color {
        color: var(--main-color);
    }

    .border-main-color {
        border-color: var(--main-color);
    }
</style>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



<div class="bg-gray-100">
    <div class="w-full text-white bg-main-color">
        <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
                <a href="#"
                    class="text-lg font-semibold tracking-widest uppercase rounded-lg focus:outline-none focus:shadow-outline">example
                    profile</a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- End of Navbar -->

<div class="bg-gray-200 rounded-3xl my-5 mx-5 px-5 py-5">
    <!-- Profile tab -->
    <!-- About Section -->
    <div class="bg-white p-3 shadow-sm rounded-sm">
        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
            <span clas="text-green-500">
                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </span>
            <span class="tracking-wide">About</span>
        </div>
        <div class="text-gray-700">
            <li class="list-decimal list-inside font-serif font-semibold pt-2">Owner 1</li>
                <div class="grid grid-cols-2">
                    <div class="px-2 py-2 font-semibold">Name</div>
                    <div class="px-2 py-2">Delinda Brillian Cahayani</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-2 py-2 font-semibold">Gender</div>
                    <div class="px-2 py-2">Female</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-2 py-2 font-semibold">Contact No.</div>
                    <div class="px-2 py-2">08996491060</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-2 py-2 font-semibold">Address</div>
                    <div class="px-2 py-2">Bringin Indah, Sidoarjo</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-2 py-2 font-semibold">Email.</div>
                    <div class="px-2 py-2">
                        <a class="text-blue-800" href="delindabrilian@gmailcom">delindabrilian@gmail.com</a>
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-2 py-2 font-semibold">Birthday</div>
                    <div class="px-2 py-2">Juni 06, 2003</div>
                </div>
            <li class="list-decimal list-inside font-serif font-semibold pt-2">Owner 2</li>
                <div class="grid grid-cols-2">
                    <div class="px-2 py-2 font-semibold">Name</div>
                    <div class="px-2 py-2">Ajeng Afriza</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-2 py-2 font-semibold">Gender</div>
                    <div class="px-2 py-2">Female</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-2 py-2 font-semibold">Contact No.</div>
                    <div class="px-2 py-2">0895361502585</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-2 py-2 font-semibold">Address</div>
                    <div class="px-2 py-2">Pucangro, Kalitengah, Lamongan</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-2 py-2 font-semibold">Email.</div>
                    <div class="px-2 py-2">
                        <a class="text-blue-800" href="ajengafriza39363@gmail.com">ajengafriza39363@gmail.com</a>
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-2 py-2 font-semibold">Birthday</div>
                    <div class="px-2 py-2">April 12, 2003</div>
                </div>
        </div>
    </div>
    <!-- End of about section -->
    <!-- End of profile tab -->
</div>


<footer
    class="bg-neutral-100 text-center dark:bg-neutral-300 lg:text-left">
    <div class="p-4 text-center text-neutral-700 dark:text-neutral-200">
    © 2023
    <a
     class="text-neutral-800 dark:text-neutral-400"
     href="https://www.instagram.com/delindabrilian/"
 >Glow Residence Apartement</a>
</footer>
</body>
</html>