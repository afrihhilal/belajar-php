<?php
class Coba
{
    public $judul = "Sempak",
            $penulis = "arab",
            $penerbit = "iran",
            $harga = 100000;
    public function getLabel(){
        return "$this->judul, $this->penerbit";
    }
}
$produk1 = new Coba;
$produk1->judul = "Wife Next Door";
$produk1->penulis = "kakek sugiono";
$produk1->penerbit = "primagama";
$produk1->harga = 100;

$produk2 = new Coba;
$produk2->judul = "Kimochi dulu";
$produk2->penulis = "Miho Ichiki";
$produk2->penerbit = "JAV Compani";
$produk2->harga = 250;

echo "Film nomer 1 adalah : " . $produk1->getLabel() . "<br>";
echo "Film nomer 2 adalah : " . $produk2->getLabel();








//$produk1 = new Coba;
//$produk1->harga = 100;
//var_dump($produk1);
//echo "<br>";
//$produk2 = new Coba;
//$produk2->penerbit = "amerika serikat";
//$produk2->tambahan = "njajal ditambah";
//var_dump($produk2);
//echo "<pre>" . var_export($produk1) . "</pre>" ;