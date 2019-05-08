<?php


class Konstruktor {

    //PROPERTY CLASS
    public  $nama,
            $nim,
            $jurusan;

    //KONSTRUKTOR
    //CARA MEMBUAT KONSTRUKTOR PHP DENGAN MENGGUNAKAN KEYWORD "__construct"
    //KONSTURKTOR DAPAT KITA KASIH NILAID DEFAULT
    public function __construct($nama = "John Doe", $nim = "2017103xxx", $jurusan = "X"){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

}

//TES KONSTRUKTOR DENGAN CARA INSTANSIASI CLASS
//KONSTRUKTOR DI EKSEKUSI KETIKA MENG INSTANSIASI CLASS
$mhs1 = new Konstruktor("Mathias", "2017103126", "Informatika");

var_dump($mhs1);