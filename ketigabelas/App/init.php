<?php

// // CARA LAMA AUTO LOAD
// require_once "App/Orang/InfoOrang.php";
// require_once "App/Orang/Orang.php";
// require_once "App/Orang/Mahasiswa.php";
// require_once "App/Orang/Dosen.php";
// require_once "App/Orang/CetakInfoOrang.php";
// require_once "App/Orang/User.php";
// require_once "App/Service/User.php";

// CARA CEPAT AUTOLOAD 
// MENCARI SEMUA CLASS YANG ADA DALAM FOLDER Orang
spl_autoload_register(function($class){
    // App\Produk\User = ["App", "Produk", "User"]

    // PECAH DIREKTORI
    $class = explode("\\", $class);
    // AMBIL USER
    $class = end($class);
    require_once __DIR__ . "/Orang/" . $class . ".php";
});

spl_autoload_register(function($class){
    // App\Service\User = ["App", "Service", "User"]

    // PECAH DIREKTORI
    $class = explode("\\", $class);
    // AMBIL USER
    $class = end($class);
    require_once __DIR__ . "/Service/" . $class . ".php";
});