<?php

class Dosen extends Orang implements InfoOrang {

    //PROPERTI
    public $nid;

    //KONSTRUKTOR
    public function __construct($nama = "orang", $pekerjaan = "-", $umur = "0", $jk = "-", $nid = 0){
        parent::__construct($nama, $pekerjaan, $umur, $jk);

        $this->nid = $nid;
    }

    //IMPLEMENTASI METHOD ABSTRACT
    public function getInfo(){
        $str = "Nama: {$this->nama}, Pekerjaan: {$this->pekerjaan}, Umur: {$this->umur}, Jenis Kelamin: {$this->jk}";

        return $str;
    }

    public function getInfoOrang(){
        $str = "Dosen: " . $this->getInfo() . " - NID: {$this->nid}";

        return $str;
    }
}