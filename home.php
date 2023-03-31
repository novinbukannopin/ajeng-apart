<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kelompok 37</title>
</head>
<body class="bg-gradient-to-r from-gray-200 to-gray-300">
<main>
    <header class="bg-white dark:bg-gray-900">
        <nav x-data="{ isOpen: false }" class="container p-6 lg:flex lg:items-center lg:justify-between fixed top-0 left-0 z-0 w-full border-b border-gray-200 bg-white py-2.5 ">
        <div class="flex items-center justify-between">
        <a href="home.php">
        <img src="logo.png" width="50" alt="logo">
        </a>
        <div>
            <a class="text-2xl font-bold text-gray-800 hover:textgray-700 dark:text-white dark:hover:text-gray-300 lg:text-3xl" href="home.php">Glow Residence Apartement</a>
            </div>
        </div>
        <div class="flex flex-col space-y-4 lg:mt-0 lg:flex-row lg:space-y-0">
        <button class="bg-transparent hover:bg-gray-200 py-2 px-4 hover:border-transparent rounded">
        <a class="text-gray-700" href="home.php">Home</a>
        </button>
        <button class="bg-transparent hover:bg-gray-200 py-2 px-4 hover:border-transparent rounded">
            <a class="text-gray-700" href="about_us.php">About Us</a>
        </button>
        <button class="bg-transparent hover:bg-gray-200 py-2 px-4 hover:border-transparent rounded">
            <a class="text-gray-700" href="contact.php">Contact</a>
        </button>
        </div>
            <a class="mt-4 block h-10 transform rounded-md border px-5 py-2 text-center text-sm capitalize text-gray-700 transitioncolors duration-300 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 lg:mt-0 lg:w-auto" href="login.php"> Login </a>
        </div>
        </nav>
        <div class="container mx-auto px-6 pt-14 text-center">
        <div class="flex justify-center">
        <img src="logo.png" alt="logo" >
        </div>
        <div class="mx-auto max-w-lg py-8">
            <h1 class="text-3xl font-bold text-gray-800 dark:textwhite md:text-4xl">Glow Residence Apartement</h1>
            <p class="mt-6 text-gray-500 dark:text-gray300">Rayakan perasaan nyaman dengan Apartement yang nyaman!</p>
        </div>
        </div>
    </header>

    <section class="py-10 bg-gradient-to-r from-gray-200 to-gray300" >
    <div class="mx-auto grid max-w-6xl grid-cols-1 gap-6 p-6
sm:grid-cols-2 md:grid-cols-3 ">
    <article class="rounded-xl bg-white p-3 shadow-lg
hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
    <div class="relative flex items-end overflow-hidden rounded-xl
flex justify-center">
        <img src="Glow Standard Room.jpg" alt="Glow Standard Room"width="200">
    </div>
        <div class="mt-1 p-2">
            <h2 class="text-slate-700">GLOW Standard Room </h2>
            <p class="mt-1 text-sm text-slate-400">Kualitas = C
</p>
            <p class="mt-1 text-sm text-slate-400">Stok Produk = 4
Unit</p>
        <div class="mt-3 flex items-end justify-between">
            <p class="text-lg font-bold text-blue-500"> <br> Harga Sewa/Malam: Rp 287.000
                <br> Harga Sewa/Bulan: Rp 3.752.000
                <br> Harga Sewa/Tahun: Rp 34.686.000
    </p>
    </div>
        </div>
    </a>
    </article>
    <article class="rounded-xl bg-white p-3 shadow-lg
hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
    <div class="relative flex items-end overflow-hidden roundedxl flex justify-center">
        <img src="Glow Superior Room.jpg" alt="Glow Superior Room"width="200">
    </div>
        <div class="mt-1 p-2">
            <h2 class="text-slate-700">GLOW Superior Room </h2>
            <p class="mt-1 text-sm text-slate-400">Kualitas = B
</p>
            <p class="mt-1 text-sm text-slate-400">Stok Produk = 2
Unit</p>
        <div class="mt-3 flex items-end justify-between">
            <p class="text-lg font-bold text-blue-500"> <br> Harga Sewa/Malam: Rp 349.000
                <br> Harga Sewa/Bulan: Rp 4.684.000
                <br> Harga Sewa/Tahun: Rp 39.440.000
    </p>
    </div>
        </div>
    </a>
    </article>
    <article class="rounded-xl bg-white p-3 shadow-lg
hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
    <div class="relative flex items-end overflow-hidden roundedxl flex justify-center">
        <img src="Glow Deluxe Room.jpg" alt="Glow Deluxe Room"width="200">
    </div>
        <div class="mt-1 p-2">
            <h2 class="text-slate-700">GLOW Deluxe Room </h2>
            <p class="mt-1 text-sm text-slate-400">Kualitas = A
</p>
            <p class="mt-1 text-sm text-slate-400">Stok Produk = 3
Unit</p>
        <div class="mt-3 flex items-end justify-between">
            <p class="text-lg font-bold text-blue-500"> <br> Harga Sewa/Malam: Rp 460.000
                <br> Harga Sewa/Bulan: Rp 5.890.000
                <br> Harga Sewa/Tahun: Rp 41.460.000
    </p>
    </div>
        </div>
    </a>
    </article>
    <article class="rounded-xl bg-white p-3 shadow-lg
hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
    <div class="relative flex items-end overflow-hidden roundedxl flex justify-center">
        <img src="Glow Suite Room.jpg" alt="Glow Suite Room"width="200">
    </div>
        <div class="mt-1 p-2">
            <h2 class="text-slate-700">GLOW Suite Room </h2>
            <p class="mt-1 text-sm text-slate-400">Kualitas = A
</p>
            <p class="mt-1 text-sm text-slate-400">Stok Produk = 2
Unit</p>
        <div class="mt-3 flex items-end justify-between">
            <p class="text-lg font-bold text-blue-500"> <br> Harga Sewa/Malam: Rp 540.000
                <br> Harga Sewa/Bulan: Rp 6.620.000
                <br> Harga Sewa/Tahun: Rp 45.340.000
    </p>
    </div>
        </div>
    </a>
    </article>
    <article class="rounded-xl bg-white p-3 shadow-lg
hover:shadow-xl hover:transform hover:scale-105 duration-300 ">
    <div class="relative flex items-end overflow-hidden roundedxl flex justify-center">
        <img src="Glow Presidential Room.jpeg" alt="Glow Presidential Room"width="200">
    </div>
        <div class="mt-1 p-2">
            <h2 class="text-slate-700">GLOW Presidential Room </h2>
            <p class="mt-1 text-sm text-slate-400">Kualitas = A+
</p>
            <p class="mt-1 text-sm text-slate-400">Stok Produk = 1
Unit</p>
        <div class="mt-3 flex items-end justify-between">
            <p class="text-lg font-bold text-blue-500"> <br> Harga Sewa/Malam: Rp 650.000
                <br> Harga Sewa/Bulan: Rp 7.320.000
                <br> Harga Sewa/Tahun: Rp 48.340.000
    </p>
    </div>
    </div>
    </a>
  </article>
 </section>
 <section class="bg-gradient-to-r from-gray-200 to-gray-300 my10">
    <div class="bg-gray-50 rounded-3xl my-8 mx-8 px-5 py-5">
        <div class="container mx-auto px-6 pt-auto pb-8">
        <h1 class="text-3xl font-semibold capitalize text-gray-800
dark:text-white lg:text-4xl text-center">Our Executive Team</h1>

        <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2">
        <div class="group flex transform cursor-pointer flex-col
items-center rounded-xl p-8 transition-colors duration-300
hover:bg-gray-300">
            <img class="h-32 w-32 rounded-full object-cover ring-4
ring-gray-300" src="delinda.jpg"
alt="delinda"/>
            <h1 class="mt-4 text-2xl font-semibold capitalize
text-gray-700">Delinda Brilian Cahayani</h1>

            <p class="mt-2 capitalize text-gray-500">Chief
Marketing Officer</p>
    </div>
    <div class="group flex transform cursor-pointer flex-col
items-center rounded-xl p-8 transition-colors duration-300
hover:bg-gray-300">
            <img class="h-32 w-32 rounded-full object-cover ring-4
ring-gray-300" src="ajeng.JPG" alt="ajeng"/>
 
            <h1 class="mt-4 text-2xl font-semibold capitalize
text-gray-700">Ajeng Afriza</h1>
 
            <p class="mt-2 capitalize text-gray-500">Chief
Executive Officer</p>
    </div>
        </div>
    </section>
</main>
<footer
    class="bg-neutral-100 text-center dark:bg-neutral-300 lg:textleft">
    <div class="p-4 text-center text-neutral-700 dark:text-neutral200">
    © 2023
    <a
     class="text-neutral-800 dark:text-neutral-400"
     href="https://www.instagram.com/delindabrilian/"
 >Glow Residence Apartement</a>
    </div>
</footer>
</body>
</html>