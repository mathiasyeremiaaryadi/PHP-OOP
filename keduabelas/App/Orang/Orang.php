<?php

Abstract class Orang {

    //PROPERTI
    protected $nama,
            $pekerjaan,
            $umur,
            $jk;

    //KONSTRUKTOR
    public function __construct($nama = "orang", $pekerjaan = "-", $umur = "0", $jk = "-"){
        $this->nama = $nama;
        $this->pekerjaan = $pekerjaan;
        $this->umur = $umur;
        $this->jk = $jk;
    }

    //METHOD BIASA (SETTER DAN GETTER)
    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setPekerjaan($pekerjaan){
        $this->pekerjaan = $pekerjaan;
    }

    public function setUmur($umur){
        $this->umur = $umur;
    }

    public function setJk($jk){
        $this->jk = $jk;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getPekerjaan(){
        return $this->pekerjaan;
    }

    public function getUmur(){
        return $this->umur;
    }

    public function getJk(){
        return $this->jk;
    }

    abstract public function getInfo();
}
