<?php  

//nama class harus sama dengan nama file (sama seperti rules java)
class Produk  {
    public $judul, $penulis, $penerbit, $harga;
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shounen Jump";
$produk1->harga = 30000;

$produk2 = new Produk();
$produk2->judul = "Genshin Impact";
$produk2->penulis = "Orang cina";
$produk2->penerbit = "Mihoyo";
$produk2->harga = 40000;

echo 'Komik: '.$produk1->getLabel();
echo "<br>";
echo 'Game: '.$produk2->getLabel();
?>