<?php 

// jualan Produk
// komik
//game
class Produk {
    public $judul, 
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $WaktuMain,
            $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe="tipe")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->WaktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if($this->tipe == "komik"){
            $str .= " - {$this->jmlHalaman} Halaman.";
        }else if($this->tipe == "game"){
            $str .= "~ {$this->WaktuMain} Jam.";
        }

        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";

        return $str;
    }
}



$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 10000, 100, 0, "komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

?>