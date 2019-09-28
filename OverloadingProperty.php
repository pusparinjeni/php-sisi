<?php

class PropOverloading{
    //inisiasi variabel untuk banyak data
    private $data=array();
    
    //variabel yang sudah bernilai
    public $declared=1;
    
    //yang dapat di akses diluar kelas
    private $hidden=2;
    
    
    //setting property : untuk menulis data property
    public function __set($nama,$nilai){
        echo "Setting '$nama' to '$nilai'\n";
        $this->data[$nama] = $nilai;
    }
    
    //membaca data property
    public function __get($nama){
        echo "Getting '$nama'\n";
    }
    
    //mengecek
    public function __isset($nama){
        echo "Apakah '$nama' ada nilainya ?\n";
        return isset($this->data[$nama]);
    }
    
    //mengosongkan
    public function __unset($nama){
        echo "Mengosongkan '$nama'\n";
        unset($this->data[$nama]);
    }
    
    //menyembunyikan
    public function getHidden(){
        return $this->hidden;
    }
}

//instanisasi

//memanggil function __set
$obj = new PropOverloading();
$obj->a = 1;
echo "<br/><br/>";

//memanggil function __get
echo $obj->a;
echo "<br/><br/>";

//memanggil __isset
var_dump(isset($obj->a));
echo "<br/><br/>";

//memanggil __unset
unset($obj->a);
echo "<br/><br/>";

//mengecek apakah sudah kosong atau belum
var_dump(isset($obj->a));
echo "<br/><br/>";

//mendeclare kembali obj yang ada nilainya
echo $obj->declared;
echo "<br/><br/>";

//memanggil getHidden
echo $obj->getHidden();
echo "<br/><br/>";

echo $obj->hidden
?>