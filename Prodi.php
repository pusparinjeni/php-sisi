<?php

include 'Universitas.php';

class Prodi extends Universitas {
    
    public $nama;
    
    public function tampil_nama(){
        return "Program Studi S1 Sistem Informasi";
    }
}

$a= new Prodi();

echo $a->profil();
echo $a->tampil_nama();
?>