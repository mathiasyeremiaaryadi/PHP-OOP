<?php

class Mahasiswa extends Orang implements InfoOrang {

    //PROPERTI
    public $nim;

    //KONSTRUKTOR
    public function __construct($nama = "orang", $pekerjaan = "-", $umur = "0", $jk = "-", $nim = 0){
        parent::__construct($nama, $pekerjaan, $umur, $jk);

        $this->nim = $nim;
    }


    //IMPLEMENTASI METHOD ABSTRACT
    public function getInfo(){
            $str = "Nama: {$this->nama}, Pekerjaan: {$this->pekerjaan}, Umur: {$this->umur}, Jenis Kelamin: {$this->jk}";

            return $str;
    }

    public function getInfoOrang(){
        $str = "Mahasiswa: " . $this->getInfo() . " - NIM: {$this->nim}";

        return $str;
    }
}