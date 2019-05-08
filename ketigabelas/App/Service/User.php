<?php

// CARA MENGGUNAKAN NAMESPACE
// FORMAT UMUM: Vendor\NameSpace\SubNameSpace;
// GUNAKAN BACKSLASH
namespace App\Service;

class User {
    public function __construct(){
        echo "Ini adalah class " . __CLASS__;
    }
}