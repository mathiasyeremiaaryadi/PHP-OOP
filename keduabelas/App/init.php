<?php

// CARA LAMA AUTO LOAD
// require_once "App/Orang/InfoOrang.php";
// require_once "App/Orang/Orang.php";
// require_once "App/Orang/Mahasiswa.php";
// require_once "App/Orang/Dosen.php";
// require_once "App/Orang/CetakInfoOrang.php";

// CARA CEPAT AUTOLOAD 
// MENCARI SEMUA CLASS YANG ADA DALAM FOLDER Orang
spl_autoload_register(function($class){
    require_once "Orang/" . $class . ".php";
});