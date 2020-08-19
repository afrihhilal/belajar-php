<?php
class Product
{
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $durasi,
            $tipe;

    public function getLabel(){
        return "$this->judul, $this->penerbit";
    }

    public function getInfo(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        }elseif ($this->tipe == "Video"){
            $str .= " ~ {$this->durasi} Menit.";
        }
        return $str;
    }

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $durasi = 0, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->durasi = $durasi;
        $this->tipe = $tipe;
    }
}

class cetakInfoProduk{
    public function cetak(Product $produk){
        $string = "{$produk->penulis} | Pemain Film : <b>{$produk->getLabel()}</b> (Rp. {$produk->harga})";
        return $string;
    }
}
$produk1 = new Product("Wife Next Door", "Kakek Sugiono", "Primagama", 100, 300, 0, "Komik");
$produk2 = new Product("Kimochi Dulu", "Miho Ichiki", "JAV Company", 250, 0, 500, "Video");

echo $produk2->getInfo();
echo "<br>";
echo $produk1->getInfo();









