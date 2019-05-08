<?php

class Mahasiswa {
    //METHOD SETTER (SET) DAN GETTER (GET) 
    //JENIS METHOD INI ADALAH UNTUK MENGAKSES DATA (PROPERTY) DALAM ENKAPSULASI
    //METHOD SET DIGUNAKAN UNTUK MEMBERI ATAU MENG SET NILAI (DATA) PADA PROPERTY 
    //METHOD GET DIGUNAKAN UNTUK MENDAPATKAN DATA DARI PROPERTY YANG SUDAH DI SET

    //JENIS METHOD INI AKAN BERGUNA KETIKA MELAKUKAN OPERASI PADA PROPERTY TERTENTU SAJA CLASS SEPERTI VALIDASI, OPERASI MATEMATIKA, MENGUBAH DATA PADA SATU PROPERTY SAJA, DAN LAINNYA
    
    //MENGUNCI PROPERTY CLASS MAHASISWA DENGAN PRIVATE, AGAR TIDAK BISA DIAKSES OLEH CLASS LAIN (ENKAPSULASI)
    private $nim,
            $nama,
            $jur;


    //HANYA AKSES MELALUI METHOD
    public function __construct($nim = "0", $nama = "X", $jur = "X"){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jur = $jur;
    }

    //METHOD SETTER

    public function setNim($nim){
        $this->nim = $nim;
    }

    //VALIDASI UNTUK PROPERTY NAMA
    public function setNama($nama){
        if(!is_string($nama)){
            throw new Exception("Nama harus berupa teks tidak bisa berupa bilangan", 1);
        }
        $this->nama = $nama;
    }

    public function setJur($jur){
        $this->jur = $jur;
    }

    //METHOD GETTER

    public function getNim(){
        return $this->nim;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getJur(){
        return $this->jur;
    }

    public function cetakMhs(){
        $output = "{$this->nim}, {$this->nama}, {$this->jur}";
        return $output;
    }
}

$mhs1 = new Mahasiswa("2017103126", "Mathias", "Informatika");

echo "Cetak seluruh data mahasiswa1 : {$mhs1->cetakMhs()}";

echo "<br>";

//IMPLEMENTASI SETTER DAN GETTER
$mhs2 = new Mahasiswa();

//DAPAT MENGAKSES PROPERTY DARI METHOD
$mhs2->setNim("2017103456");
//COBA INI : $mhs2->setNama(123456);
$mhs2->setNama("Andi");
$mhs2->setJur("Informatika");


//DAPATKAN DATA
echo "Cetak nim mahasiswa2 saja : {$mhs2->getNim()}";

echo "<br>";

echo "Cetak nama mahasiswa2 saja : {$mhs2->getNama()}";

echo "<br>";

echo "Cetak seluruh data mahasiswa2 : {$mhs2->cetakMhs()}";