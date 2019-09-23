<?php

//class
class hewan {
    //property
    public $nama;
    public $jenis;
    
    
    //method
    function tampilkan_nama(){
        return "Nama : ".$this->nama;
    }
    
    function tampilkan_jenis(){
        return "Jenis : ".$this->jenis;
    }
}

//intanisasiasi classs hewan
$hewan=new hewan();

//mengakses property dalam class hewan
$hewan->nama='Kelinci';
$hewan->jenis='Mamalia';


//memanggil method tampilkan_namad dari class manusia
echo $hewan->tampilkan_nama();
echo "<br>";
echo $hewan->tampilkan_jenis();
echo "<br>";

//intanisasiasi classs paus
$paus=new hewan();

//mengakses property dalam class hewan
$paus->nama='Paus';
$paus->jenis='Carnivora';


//memanggil method tampilkan_namad dari class manusia
echo $paus->tampilkan_nama();
echo "<br>";
echo $paus->tampilkan_jenis();
echo "<br>";


?>