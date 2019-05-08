<?php

//CONSTANT ATAU KONSTANTA PHP MEMILIKI 2 IMPLEMENTASI
//1. define() 
//TIDAK DAPAT DISIMPAN DALAM CLASS
define("nama", "Mathias");

echo nama;

echo "<br>";

//2. const
//DAPAT DISIMPAN DALAM CLASS
const umur = 30;

echo umur;

//MAGIC CONSTANT 
//1. __LINE__
//BARIS KODE DITULIS

//2. __FILE__
//LOKASI FILE SEKARANG

//3. __DIR__
//DIREKTORI FILE YANG BERSANGKUTAN

//4. __FUNCTION__
//MENGETAHUI FUNCTION BERADA SEKARANG

//5. __CLASS__
//MENGETAHUI CLASS BERADA SEKARANG

//6. __TRAIT__
//7. __METHOD__
//8. __NAMESPACE__