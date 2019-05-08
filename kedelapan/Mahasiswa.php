<?php

//STATIC KEYWORD (PROSEDURAL)
//DENGAN STATIC KEYWORD KITA DAPAT MENGAKSES PROPERTY DAN METHOD PADA CLASS TANPA MENGINSTANSIASI CLASS NYA
//STATIC TIDAK BERGANTUNG PADA INSTANSIASI , JADI NILAINYA TETAP

class Mahasiswa {
    
    //PENGGUNAAN STATIC PROPERTY
    public static   $nim,
                    $nama = "Mathias",
                    $jur;


    public function __construct($nim = "0", $nama = "X", $jur = "X"){
        self::$nim = $nim;
        self::$nama = $nama;
        self::$jur = $jur;
    }

    //PENGGUNAAN STATIC PROPERTY

    public static function setNim($nim){
        self::$nim = $nim;
    }

    public static function setNama($nama){
        if(!is_string($nama)){
            throw new Exception("Nama harus berupa teks tidak bisa berupa bilangan", 1);
        }
        self::$nama = $nama;
    }

    public static function setJur($jur){
       self::$jur = $jur;
    }

    public static function getNim(){
        return self::$nim;
    }

    public static function getNama(){
        return self::$nama;
    }

    public static function getJur(){
        return self::$jur;
    }

    //KEYWORD THIS UNTUK STATIC DIGANTI DENGAN SELF
    public static function cetakMhs(){
        $output = self::$nim . ", " . self::$nama . ", " . self::$jur;
        return $output;
    }
}

//CARA MENGAKSES PROPERTY DAN METHOD STATIC
//MENGGUNAKAN nama_kelas::property 
echo Mahasiswa::$nama;
//MENGGUNAKAN nama_kelas::method
echo Mahasiswa::cetakMhs();
