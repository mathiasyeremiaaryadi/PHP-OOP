<?php
//OBJECT MEMILIKI PROPERTY (DATA) DAN METHOD (PERILAKU)
//PROPERTY DI INISIALISASI SEPERTI VARIABLE PHP, HANYA MENGGUNAKAN ACCESS MODIFIER (VISIBILITY)
//CONTOH: public $test;

//METHOD DI INISIALISASI SEPERTI FUNCTION DI PHP, HANYA MENGGUNAKAN ACCESS MODIFIER (VISIBILITY) ATAU TIDAK DIGUNAKAN
//CONTOH: public function coba(){} 

//CONTOH KASUS
//SEBUAH TOKO MEMILIKI PRODUK KOMIK

//BUAT CLASS
class Produk {

    //PROPERTY PRODUK 
    //CARA MENGGUNAKAN DAN MEMBERIKAN ISI PROPTERTY
    //CARA PERTAMA (NILAI DEFAULT)
    public  $judul = "Judul",
            $penulis = "Penulis",
            $penerbit = "Penerbit",
            $harga = 0;

    //METHOD PRODUK 
    public function getLabel(){
        //MENGGUNAKAN KEYWORD $THIS UNTUK MENGGUNAKAN VARIABLE DALAM FUNCTION
        //ATAU MENGGUNAKAN PROPERTY YANG ADA DIDALAM CLASS PADA METHOD
        return "$this->judul, $this->penerbit";
    }

}

//CARA KEDUA (MENGGANTI NILAI PROPERTY)
//BUAT OBJEK
$produk1 = new Produk();
$produk1->judul = "Naruto"; 
var_dump($produk1);

//MENGGUNAKAN NILAI DEFAULT
$produk2 = new Produk();
var_dump($produk2->judul);
//MENAMBAHKAN PROPERTI BARU
$produk2->keterangan = "Penting";
var_dump($produk2);

//IMPLEMENTASI KASUS 
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

//OUTPUT PRODUK (MANUAL)
echo "Komik 1 : $produk3->judul, $produk3->penulis";
echo "<br>";

//CARA MENGGUNAKAN METHOD
//OUTPUT PRODUK (OTOMATIS DARI FUNCTION)
echo "Komik 1 : " . $produk3->getLabel();
echo "<br>";

$produk4 = new Produk();
$produk4->judul = "Dynasty Warrior";
$produk4->penulis = "KOEI";
$produk4->penerbit = "KOEI";
$produk4->harga = 300000;

echo "Komik  : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();





