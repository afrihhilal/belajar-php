<?php
class Product
{
    public $judul,
            $penulis,
            $penerbit,
            $harga;
    public function getLabel(){
        return "$this->judul, $this->penerbit";
    }
    public function __construct($judul = null, $penulis = null, $penerbit = null, $harga = null){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
}
$produk1 = new Product("Wife Next Door", "Kakek Sugiono", "Primagama", 100);
$produk2 = new Product("Kimochi Dulu", "Miho Ichiki", "JAV Company", 250);
$produk3 = new Product("Avenger");

echo "Film nomer 1 adalah : " . $produk1->getLabel() . " dengan harga : " . $produk1->harga . " dan pemainnya : " . $produk1->penulis;
echo "<br>"; 
echo "Film nomer 2 adalah : " . $produk2->getLabel() . " dengan harga : " . $produk2->harga . " dan pemainnya : " . $produk2->penulis;
echo "<br>";
var_dump($produk3);