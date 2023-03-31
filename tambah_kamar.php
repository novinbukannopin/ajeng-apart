<?php
session_start();
include 'index.php';
if($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>';}
    
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="">
    <header class="bg-white dark:bg-gray-900">
        <nav x-data="{ isOpen: false }" class="container mx-auto p-6 lg:flex lg:items-center lg:justify-between fixed top-0 left-0 z-20 w-full border-b border-gray-200 bg-white py-2.5 px-6 sm:px-4">
        <div class="flex items-center justify-between">
        <img src="logo.png" width="50" alt="logo">
         <div>  
            <a class="text-2xl font-bold text-gray-800 hover:text-gray-700 dark:text-white dark:hover:text-gray-300 lg:text-3xl" href="home.php">GLOW Residence Apartement</a>
            </div>
         </div>
            <div class="flex flex-col space-y-4 lg:mt-0 lg:flex-row lg:space-y-0">
        <button class="bg-transparent hover:bg-gray-200 py-2 px-4 hover:border-transparent rounded">
        <a class="text-gray-700" href="profile.php">Profile</a>
        </button>        
        <button class="bg-transparent hover:bg-gray-200 py-2 px-4 hover:border-transparent rounded">
            <a class="text-gray-700" href="data_Kamar.php">Data Kamar</a>
        </button>
        <button class="bg-transparent hover:bg-gray-200 py-2 px-4 hover:border-transparent rounded">
            <a class="text-gray-700" href="data_customer.php">Data Customer </a>
        </button>
        </div>
            <a class="mt-4 block h-10 transform rounded-md border px-5 py-2 text-center text-sm capitalize text-gray-700 transition-colors duration-300 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 lg:mt-0 lg:w-auto" href="logout.php"> Logout </a>
        </div>
        </nav>
    </header>

    <!-- buttons --->
    <div class="w-3/12 flex justify-end">
    </div>
</header>

<div class="bg-yellow-100 rounded-3xl mt-28 mx-12 px-5 py-3">
    <p class="text-center text-xl font-bold">Tambah Data Kamar</p>
    <form action="" method="POST">
    <div class="text-center">
     <form action="" method="POST">
        <input type="text" name="id" class="input-control" placeholder="Id Kamar" required>
        <input type="text" name="no" class="input-control" placeholder="No Pesanan" required>
        <input type="text" name="nama" class="input-control" placeholder="Nama Kamar" required>
        <input type="text" name="harga" class="input-control" placeholder="Harga Kamar" required>
        <textarea  name="deskripsi" class="input-control" placeholder="Deskripsi Kamar"></textarea>
        <input type="text" name="stock" class="input-control" placeholder="Ketersediaan Kamar" required>
    </div>
</div>
<div> 
      <button type="submit" name="submit" class="bg-transparent hover:bg-yellow-500 text-yellow-700 font-semibold hover:text-white mx-12 mt-8 py-2 px-4 border border-yellow-500 hover:border-transparent rounded ">
      <a href="tambah_kamar.php?id=<?php echo $row['id_kamar']?>">
        Tambah Data Kamar
      </button>
      </a>
</div> 
</form>

<?php 
    if(isset($_POST['submit'])){

        $id = $_POST['id'];
        $no = $_POST['no'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $deskripsi = $_POST['deskripsi'];
        $stock = $_POST['stock'];

        $insert = mysqli_query($conn, "INSERT INTO tb_kamar VALUES(
                      '".$id."',
                      '".$no."',
                      '".$nama."',
                      '".$harga."',
                      '".$deskripsi."',
                      '".$stock."'
                      )");
        if($insert)
        {echo '<script>alert("Tambah data kamar berhasil")</script>';
            echo  '<script>window.location="data_kamar.php"</script>';}
        } else
        ?>
</body>
</html>