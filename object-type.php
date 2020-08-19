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
    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
}

class cetakInfoProduk{
    public function cetak(Product $produk){
        $string = "{$produk->penulis} | Pemain Film : <b>{$produk->getLabel()}</b> (Rp. {$produk->harga})";
        return $string;
    }
}
$produk1 = new Product("Wife Next Door", "Kakek Sugiono", "Primagama", 100);
$produk2 = new Product("Kimochi Dulu", "Miho Ichiki", "JAV Company", 250);

echo "Film nomer 1 adalah : " . $produk1->getLabel() . " dengan harga : " . $produk1->harga . " dan pemainnya : " . $produk1->penulis;
echo "<br>"; 
echo "Film nomer 2 adalah : " . $produk2->getLabel() . " dengan harga : " . $produk2->harga . " dan pemainnya : " . $produk2->penulis;
echo "<br>";
$tampil = new cetakInfoProduk();
echo $tampil->cetak($produk2);







//$produk1 = new Coba;
//$produk1->harga = 100;
//var_dump($produk1);
//echo "<br>";
//$produk2 = new Coba;
//$produk2->penerbit = "amerika serikat";
//$produk2->tambahan = "njajal ditambah";
//var_dump($produk2);
//echo "<pre>" . var_export($produk1) . "</pre>" ;