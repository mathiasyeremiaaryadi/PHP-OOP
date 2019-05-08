<?php

// INSTERFACE SEMUANYA SAMA SEKALI TIDAK ADA IMPLEMENTASI, OLEH SEBAB ITU TIDAK MEMILIKI PROPERTI, HANYA METHOD (KOMPOSISI)
// MINTERFACE DAPAT DIKATAKAN HANYA SEBAGAI TEMPLATE CLASS UNTUK TURUNAN CLASSNYA
// JUMLAH IMPLEMENTASI HARUS SAMA DENGAN JUMLAH INTERFACE
// INTERFACE JUGA MENGIMPLEMENTASI POLYMORPHISM

   
            
// INTERFACE
interface InfoOrang {
    public function getInfoOrang();
}

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

class CetakInfoOrang {
    //PROPERTI ARRAY
    public $daftarOrang = [];

    public function tambahOrang(Orang $orang){
        //MENGISI ARRAY DENGAN DATA BERTIPE OBJEK BUAH
        $this->daftarOrang[] = $orang;
    }

    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";

        //MENCETAK BUAH
        foreach ($this->daftarOrang as $org) {
            $str .= "- {$org->getInfoOrang()} <br>";
        }

        return $str;
    }
}

$orang1 = new Mahasiswa("Mathias", "Mahasiswa", 20, "Laki-Laki", "2017103126");
$orang2 = new Dosen("Marshell", "Dosen", 30, "Laki-Laki", "TI890834");

$cetakOrang = new CetakInfoOrang();
$cetakOrang->tambahOrang($orang1);
$cetakOrang->tambahOrang($orang2);
echo $cetakOrang->cetak();