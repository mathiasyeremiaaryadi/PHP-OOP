<?php

// AUTOLOAD DIGUNAKAN UNTUK PENGAGTURAN TATA LETAK CLASS DALAM SETIAP FILE KETIKA PROGRAM NYA SANGAT BESAR
// SEHINGGA SETIAP CLASS DIPISAH PADA FILE MASING-MASING
// AUTOLOAD MEMUDAHKAN PENEMPATAN CLASS DALAM SETIAP CLASS DAN PEMANGGILAN CLASS ANTAR FILE SATU DENGAN FILE YANG LAINNNYA

require_once "App/init.php";

$orang1 = new Mahasiswa("Mathias", "Mahasiswa", 20, "Laki-Laki", "2017103126");
$orang2 = new Dosen("Marshell", "Dosen", 30, "Laki-Laki", "TI890834");

$cetakOrang = new CetakInfoOrang();
$cetakOrang->tambahOrang($orang1);
$cetakOrang->tambahOrang($orang2);
echo $cetakOrang->cetak();