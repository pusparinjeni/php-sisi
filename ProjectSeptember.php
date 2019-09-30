<?php

class barang{
    //property
    public $nama_barang, $harga_barang, $stok_barang;
    
    
    //konstanta
        const stok_barang = 0;
    function showStok(){
        echo self::stok_barang;
    }
    
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

class pembayaran{
    //property
    public $tgl_bayar,$jumlah_tagihan;
}

class lunas extends pembayaran{
    public $jumlah_bayar, $status;
}

class kredit extends pembayaran{
    public $jumlah_kredit,$bunga;
}

echo barang::stok_barang;

?>