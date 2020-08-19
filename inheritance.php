<?php
class Product
{
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $durasi;

    public function getLabel(){
        return "$this->judul, $this->penerbit";
    }

    public function getInfo(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $durasi = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->durasi = $durasi;
    }
}

class Komik extends Product {
    public function getInfo(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Video extends Product {
    public function getInfo(){
        $str = "Video : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->durasi} Menit";
        return $str;
    }
}


$produk1 = new Komik("Wife Next Door", "Kakek Sugiono", "Primagama", 10000, 300, 0);
$produk2 = new Video("Kimochi Dulu", "Miho Ichiki", "JAV Company", 250000, 0, 500);

echo $produk1->getInfo();
echo "<br>";
echo $produk2->getInfo();
echo "<br>";
//var_dump($produk1);









