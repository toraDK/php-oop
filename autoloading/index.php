<?php 

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 10000, 100, "komik");
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50, "game");


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

?>