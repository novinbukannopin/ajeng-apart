<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kelompok 37</title>
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
        <a class="mt-4 block h-10 transform rounded-md border px-5 py-2 text-center text-sm capitalize text-gray-700 transitioncolors duration-300 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 lg:mt-0 lg:w-auto" href="http://localhost/resindenceapartement/login.php"> Login </a>
        </div>
    </nav>
</head>

<body style="background-image: url(bg image.jpg); background-size: cover;">
    <div class="bg-gray-200 rounded-3xl my-20 mx-20 px-5 py-5">
        <h1 class="text-4xl font-bold text-center text-zinc-800 font-serif">WELCOME TO GLOW Residence Apartement</h1>

        <ol class="px-5 pt-5">
            <li class="list-disc text-2xl font-semibold font-serif">
                <h2 class="text-xl font-semibold font-serif">Latar Belakang Pendiri</h2>
            </li>

            <div class="grid-cols-2 flex justify-center gap-4 pt-3 pb-3">
                <img src="delinda.jpg" width="180" height="200" />
                <img src="ajeng.JPG" width="180" height="200" />
            </div>

            <p class="text-justify font-serif">Pendiri <b> GLOW Residence Apartement </b> merupakan dua orang mahasiswa yang
                berasal dari Universitas Pembangunan Nasional "Veteran" Jawa
                Timur.
                <b> GLOW Residence </b> didirikan wirausahawan muda bernama
                <u>Delinda Brilian Cahayani</u> dan <u>Ajeng Afriza</u>. <b> GLOW Residence Apartement </b>
                didirikan pada tahun 2018.
                Bermula dari keinginan dari dua orang mahasiswa tersebut
                untuk mencari penghasilan sendiri dan menyalurkan minat mereka
                dalam dunia <i>property</i> sehingga mereka memutuskan untuk
                mendirikan <b> GLOW Residence Apartement </b> ini sebagai usaha penyewaan <i>apartement</i>.
                Usaha mereka sudah sangat terkenal bahkan mereka memiliki
                omset yang sangat besar di usia muda.
            </p>
            <br>
            <p class="text-justify font-serif">
                <u>Delinda Brilian Cahayani</u> dan <u>Ajeng Afriza</u> keduanya
                memiliki latar belakang yang luar biasa saat SMA.
                Mereka merupakan lulusan dari Wisconsin School Of Bussines.
                Wisconsin School Of Bussines adalah lembaga
                Pendidikan bisnis dengan metode pengajaran secara dinamis
                khusus untuk siswa siswi yang ingin belajar <i>bussines</i>
                salah satunya di bidang <i>property</i> baik sebagai <i>hobby</i> ataupun profesi.
                Tidak hanya itu, selain memiliki hobi dalam dalam dunia
                <i>propherty</i> mereka juga memiliki hobi dalam memperdalam ilmu
                tentang bisnis.
                Tentunya berkat dukungan dari orang tua, mereka mampu dan
                sukses dalam membangun usaha penyewaan <i>apartement</i> ini.
            </p>
            <br>

            <li class="list-disc text-2xl font-semibold font-serif">
                <h2 class="font-serif text-xl">About GLOW Residence</h2>
                <!—Logo Perusahaan-->
            </li>

            <div class="justify-center flex">
                <img src="logoo.png" width="200" height="200" />
            </div>
            <br>

            <p class="font-serif text-justify"></p>GLOW Reesidence Apartement merupakan perusahaan rintisan yang bergerak pada
            bidang <i>property</i> di industri fasilitas.
            GLOW Resident berdiri sejak 2018 dengan <i>owner</i> yaitu
            <u>Delinda Brilian Cahayani</u> dan <u>Ajeng Afriza</u>.
            Awalnya mereka hanya sekedar tertarik pada bidang <i>property</i> dan
            hanya memperdalami tentang penyewaan <i>apartement</i>.
            Namun, mereka akhirnya tertarik merubah sebagai peluang bisnis karena omset yang
            dihasilkan dari penyewaan dan dibangunlah GLOW Resident Apartement ini.
            </p>

            <li class="list-disc text-2xl font-semibold font-serif">
                <h2 class="font-serif text-xl"><b>Pilihan Kamar GLOW Residence Apartement</b></h2>
            </li>
            <ol>

                <li class="list-decimal list-inside font-serif font-semibold pt-2">GLOW Standard Room</li>
                <div class="justify-center flex">
                    <img src="Glow Standard Room.jpg" width="200" height="200" />
                </div>
                <p class="font-serif text-center"> <br> Harga Sewa/Malam: Rp 287.000
                    <br> Harga Sewa/Bulan: Rp 3.752.000
                    <br> Harga Sewa/Tahun: Rp 34.686.000
                    <br> Tersedia: 4
                </p>

                <li class="list-decimal list-inside font-serif font-semibold pt-2">GLOW Superior Room</li>
                <div class="justify-center flex">
                    <img src="Glow Superior Room.jpg" width="200" height="200" />
                </div>
                <p class="font-serif text-center"> <br> Harga Sewa/Malam: Rp 349.000
                    <br> Harga Sewa/Bulan: Rp 4.684.000
                    <br> Harga Sewa/Tahun: Rp 39.440.000
                    <br> Tersedia: 2
                </p>

                <li class="list-decimal list-inside font-serif font-semibold pt-2">GLOW Deluxe Room</li>
                <div class="justify-center flex">
                    <img src="Glow Deluxe Room.jpg" width="200" height="200" />
                </div>
                <p class="font-serif text-center"> <br> Harga Sewa/Malam: Rp 460.000
                    <br> Harga Sewa/Bulan: Rp 5.890.000
                    <br> Harga Sewa/Tahun: Rp 41.460.000
                    <br> Tersedia: 3
                </p>

                <li class="list-decimal list-inside font-serif font-semibold pt-2">GLOW Suite Room</li>
                <div class="justify-center flex">
                    <img src="Glow Suite Room.jpg" width="200" height="200" />
                </div>
                <p class="font-serif text-center"> <br> Harga Sewa/Malam: Rp 540.000
                    <br> Harga Sewa/Bulan: Rp 6.620.000
                    <br> Harga Sewa/Tahun: Rp 45.340.000
                    <br> Tersedia: 2
                </p>

                <li class="list-decimal list-inside font-serif font-semibold pt-2">GLOW Presidential Room</li>
                <div class="justify-center flex">
                    <img src="Glow Presidential Room.jpeg" width="200" height="200" />
                </div>
                <p class="font-serif text-center"> <br> Harga Sewa/Malam: Rp 650.000
                    <br> Harga Sewa/Bulan: Rp 7.320.000
                    <br> Harga Sewa/Tahun: Rp 48.340.000
                    <br> Tersedia: 1
                </p>
            </ol>
        </ol>

        <h3 class="font-serif text-xl pt-4 font-semibold">Contact Us</h3>
        <div class="grid-cols-2 flex gap-3 pt-3">
            <a href="https://www.instagram.com/delindabrilian/"><img alt="Instagram" width="35" height="35" src="./ig.jpeg" /></a>
            <a href="https://web.facebook.com/ajeng.matsaba"><img alt="facebook" width="35" height="35" src="fb.jpeg" /></a>
        </div>
    </div>
</body>

</html>