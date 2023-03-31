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
    <title>Glow Residence Apartement</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradiant-to-r from-gray-100 to gray-300">

    <header class="bg-white dark:bg-gray-900">
    <nav x-data="{ isOpen: false }" class="container p-6 lg:flex lg:items-center lg:justify-between fixed top-0 left-0 z-0 w-full border-b border-gray-200 bg-white py-2.5 ">
        <div class="flex items-center justify-between">
        <a href="home.php.">
        <img src="logo.png" width="50" alt="logo">
        </a>
        <div>
            <a class="text-2xl font-bold text-gray-800 hover:textgray-700 dark:text-white dark:hover:text-gray-300 lg:text-3xl" href="home.php">Glow Residence Apartement</a>
            </div>
        </div>
        <div class="flex flex-col space-y-4 lg:mt-0 lg:flex-row lg:space-y-0">
        <button class="bg-transparent hover:bg-gray-200 py-2 px-4 hover:border-transparent rounded">
        <a class="text-gray-700" href="profile.php">Profile</a>
        </button>
</body>
</html>