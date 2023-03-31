<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Karyawan | GLOW Residence Apartement</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-gray-100 to-gray-300">
    <div class="container mx-auto px-6 text-center">
    <div class="flex justify-center">    
    <img src="logoo.png" alt="logo" width="100">
    </div>
    <div class="mx-auto max-w-lg">
    <h1 class="text-3xl font-bold text-gray-800 dark:text-white md:text-4xl">GLOW Residence Apartement</h1>
    <p class="mt-6 text-gray-500 dark:text-gray-300">Rayakan perasaan nyaman dengan Apartement yang nyaman!</p>
    </div>
    </div>
    <form action="" method="POST">
    <section class="bg-gradient-to-r from-gray-100 to-gray-300">
    <div class="flex flex-col items-center justify-center px-6 mx-auto">
      <a href="login.php" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center">
                  LOGIN
              </h1>
                <div>
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                      <input type="text" name="user" placeholder="username"class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="pass"placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <div class="text-center"> 
            <button type="submit" name="login" value="login" class="bg-gray-200 hover:bg-gray-300 py-2 px-4 hover:border-transparent rounded">
            <a class="text-gray-700" href="dashboard.php">Login</a>
            </button>
                </div>
            </form>
          </div>
      </div>
  </div>
 </section>

    <?php
        if(isset($_POST['login'])){
            session_start();
         include 'index.php';
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $cek = mysqli_query($conn, "SELECT * FROM tb_karyawan WHERE username = '".$user."' AND password= '".$pass."'");
        if(mysqli_num_rows($cek) > 0){
            $d = mysqli_fetch_object($cek);
            $_SESSION['status_login'] = true;
            $_SESSION['admin_global'] = $d;
            $_SESSION['id'] = $d->admin_id; 
            echo '<script>window.location="dashboard.php"</script>';}
        else
            {echo '<script>alert("Username atau password anda salah")</script>';}
        }
    ?>
</body>
</html>