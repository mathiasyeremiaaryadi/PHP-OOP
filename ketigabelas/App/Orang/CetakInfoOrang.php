<?php

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