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
            <a class="text-gray-700" href="data_kamar.php">Data Kamar</a>
        </button>
        <button class="bg-transparent hover:bg-gray-200 py-2 px-4 hover:border-transparent rounded">
            <a class="text-gray-700" href="data_customer.php">Data Customer </a>
        </button>
        </div>
            <a class="mt-4 block h-10 transform rounded-md border px-5 py-2 text-center text-sm capitalize text-gray-700 transition-colors duration-300 hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 lg:mt-0 lg:w-auto" href="logout.php"> Logout </a>
        </div>
        </nav>
        
    </header>
    
<style>

  .table {
    border-spacing: 0 15px;
  }

  i {
    font-size: 1rem !important;
  }

  .table tr {
    border-radius: 20px;
  }

  tr td:nth-child(n + 9),
  tr th:nth-child(n + 9) {
    border-radius: 0 0.625rem 0.625rem 0;
  }

  tr td:nth-child(1),
  tr th:nth-child(1) {
    border-radius: 0.625rem 0 0 0.625rem;
  }

</style>

  
<!-- component -->
<link
  href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
  rel="stylesheet"
/>
<div class="flex items-center justify-center p-20 bg-white">
  <div class="col-span-12">
    <div class="overflow-auto lg:overflow-visible ">
        <div class="flex lg:justify-between border-b-2 border-fuchsia-900 pb-1">
        <h2 class="text-2xl text-gray-900 font-bold">Tabel Data Customer</h2>
        <div class="text-center flex-auto"> </div>
        </div>
      <table class="table text-gray-400 border-separate space-y-6 text-sm">
        <thead class="bg-yellow-500 text-white">
          <tr>
            <th class="p-3">No</th>
            <th class="p-3 text-left">No Pesanan</th>
            <th class="p-3 text-left">Nama Customer</th>
            <th class="p-3 text-left">Telepon</th>
            <th class="p-3 text-left">Kamar</th>
            <th class="p-3 text-left">Jumlah</th>
            <th class="p-3 text-left">Harga</th>
            <th class="p-3 text-left">Total</th>
            <th class="p-3 text-left">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
                $no = 1;
                $kamar = mysqli_query($conn, "SELECT * FROM tb_customer ORDER BY no_pesanan DESC");
                if(mysqli_num_rows($kamar) > 0){
                while($row = mysqli_fetch_array($kamar)){
            ?>
            
            <tr class="bg-yellow-200 lg:text-black">
                <td  class="px-6 py-3 font-bold" ><?php echo $no++?>
                <td  class="px-6 py-3 font-bold"><?php echo $row['no_pesanan']?></td>
                <td  class="px-6 py-3 font-bold"><?php echo $row['nama_customer']?></td>
                <td  class="px-6 py-3 font-bold"> <?php echo $row['telp']?></td>
                <td  class="px-6 py-3 font-bold"><?php echo $row['kamar']?></td>
                <td  class="px-6 py-3 font-bold"><?php echo $row['jumlah']?></td>
                <td  class="px-6 py-3 font-bold"><?php echo $row['harga']?></td>
                <td  class="px-6 py-3 font-bold"><?php echo $row['total']?></td>
                <td>
                <a href="hapus_customer.php?idc=<?php echo $row ['no_pesanan']?>" class="text-red-400 hover:text-gray-100 ml-2">
                <i class="material-icons-round text-base">delete_outline</i>    
                </td>
            </tr>
            <?php }} else{ ?>
                    <td colspan="7"class="font-bold text-center">Tidak ada data customer</td>
                </tr>
                
                <?php } 
            ?> 
          </tr>
        </tbody>
      </table>
      <div> 
      <button class="bg-transparent hover:bg-yellow-500 text-yellow-700 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded">
      <a href="tambah_customer.php">
        Tambah Data Customer
        </button>
      </a>
      </div>
  </div>
</div>
</body>
</html>