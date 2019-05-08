<?php

class Mahasiswa {

    public  $nama,
            $nim,
            $jurusan;

    public function __construct($nama = "mathias", $nim = "201730126", $jurusan = "informatika"){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
}

class InfoMahasiswa {
    //TIPE DATA OBJEK : Object $ob1
    public function cetak(Mahasiswa $mhs){
        $str = "Nama : {$mhs->nama} | NIM: {$mhs->nim} | Jurusan: {$mhs->jurusan}";
        return $str;
    }
}


$mhs1 = new Mahasiswa("Mathias", "2017103126", "Informatika");

$infoMhs1 = new InfoMahasiswa();
echo $infoMhs1->cetak($mhs1);