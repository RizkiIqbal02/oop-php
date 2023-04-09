<?php  

//nama class harus sama dengan nama file (sama seperti rules java)
class Produk  {
    public $judul, $penulis, $penerbit, $harga;
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shounen JUmp";
$produk1->harga = "30000";

var_dump($produk1)

?>