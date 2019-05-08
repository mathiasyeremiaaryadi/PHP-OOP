<?php

//INHERITANCE ADALAH PEWARISAN
//PRINSIP HIRARKI ANTARA PARENT DENGAN CHILD
//CHILD ATAU YANG DIWARISI DAPAT MENGGUNAKAN DAN MENGAKSES PROPERTY DAN METHOD DARI PARENT YANG MEWARISI
//IMPLEMENTASI INHERITANCE ADALAH
//1. OVERRIDING -> CHIHL CLASS MEMILIKI NAMA METHOD YANG SAMA DENGAN METHOD YANG ADA DI PARENT CLASS

//CONTOH KASUS
//MAKHLUK HIDUP SECARA SEDERHANA MEMILIKI JENIS YAITU MAMALIA, REPTIL, DAN AMFIBI
//TETAPI SETIAP JENIS ITU MEMILIKI CIRI CIRI YANG SAMA SEBAGAI MAKHLUK HIDUP
//OLEH KARENA ITU SETIAP JENIS MAKHLUK HIDUP MEMILIKI CIRI CIRI YANG DIWARISI DARI CIRI CIRI UMUM PADA MAKHLUK HIDUP
class MakhlukHidup {

    //PROPERTY (CIRI)
    public  $jenis,
            $jumlahKaki,
            $jenisMakan,
            $jenisBiak;


    //METHOD
    //KONSTRUKTOR
    public function __construct($jenis = "Tidak Diketahui", $jumlahKaki = 0, $jenisMakan = "Tidak Diketahui", $jenisBiak = "Tidak Diketahui"){
        $this->jenis = $jenis;
        $this->jumlahKaki = $jumlahKaki;
        $this->jenisMakan = $jenisMakan;
        $this->jenisBiak = $jenisBiak;
    }

    //FUNGSI UNTUK MENCETAK
    public function infoHewan(){
        $str = "Makhluk hidup <b>{$this->jenis}</b> memliki kaki <b>{$this->jumlahKaki}</b>, merupakan <b>{$this->jenisMakan}</b>, dan berkembang biak dengan cara <b>{$this->jenisBiak}</b>";
        return $str;
    }
}

//INHERITANCE MEMILIKI KEYWORD extends
//BERIKUT CLASS MAMALIA, KEPANJANGAN (EXTENDS) DARI MAKHLUK HIDUP
//CLASS MAMALIA ADALAH CHILD CLASS DARI MAHKLUK HIDUP
class Mamalia extends MakhlukHidup {

    //OVERRIDING METHOHD INFO HEWAN
    //MENGGUNAKAN KEYWORD parent::
    //KEYWORD parent:: ADALAH METHOD STATIC
    
    public function __construct($jenis = "Tidak Diketahui", $jumlahKaki = 0, $jenisMakan = "Tidak Diketahui", $jenisBiak = "Tidak Diketahui"){
        parent::__construct($jenis, $jumlahKaki, $jenisMakan , $jenisBiak);
    }

    public function infoHewan(){
        $str = parent::infoHewan();
        return $str;
    }
}

//INSTANSIASI
$hewan1 = new Mamalia("Mamalia", 4, "Herbivora", "Menyusui");

echo $hewan1->infoHewan();

