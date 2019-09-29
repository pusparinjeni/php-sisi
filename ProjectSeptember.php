<?php

class barang{
    //property
    public nama_barang, harga_barang, stok_barang;
    
    //method
    function tampilkan_nama(){
        return "Nama : ".$this->nama_barang;
    }
    
    function tampilkan_harga(){
        return "Jenis : ".$this->harga_barang;
    }
    
    function tampilkan_stok(){
        return "Jenis : ".$this->stok_barang;
    }
}

?>