<?php

class Mahasiswa {
    //ENKAPSULASI->PEMAKETAN AKSES PROPERTY DATA DALAM CLASS (KAPSUL)
    //IMPLEMENTASI ENKAPSULASI ADALAH ACCESS MODIFIER
    //ACCESS MODIFIER DALAM PHP DISEBUT DENGAN VISIBILITY
    //1. PUBLIC -> AKSES BEBAS YAITU DILUAR CLASS, DALAM CLASS
    //2. PROTECTED -> AKSES DALAM INHERITANCE (HANYA CHILD CLASS YANG BISA MENGAKSES DARI PARENT CLASS)
    //3. PRIVATE -> AKSES HANYA DALAM CLASS DISITU JUGA
    
    //MENGUNCI PROPERTY CLASS MAHASISWA DENGAN PRIVATE, AGAR TIDAK BISA DIAKSES OLEH CLASS LAIN
    private $nim,
            $nama,
            $jur;


    //HANYA AKSES MELALUI METHOD
    public function __construct($nim = "0", $nama = "X", $jur = "X"){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jur = $jur;
    }

    public function cetakMhs(){
        $output = "{$this->nim}, {$this->nama}, {$this->jur}";
        return $output;
    }
}

$mhs = new Mahasiswa("2017103126", "Mathias", "Informatika");

echo $mhs->cetakMhs();

//DENGAN ENKAPSULASI, TIDAK BISA SEMBARANG MENGGANTI NILAI PROPERTY, JADI HANYA BISA MENGAKSES DARI METHOD SAJA
//INI AKAN ERROR
//$mhs->nim = "3049209940"; 