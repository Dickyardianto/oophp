<?php 

class Produk {
	public $judul = "judul", 
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getLable(){
		return "$this->penulis, $this->penerbit";
	}
}


$produk1 = new produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Dicky Ardianto";
$produk1->penerbit = "Ujang Amen";
$produk1->harga = 10000;


$produk2 = new Produk();
$produk2->judul = "Call Of Duty";
$produk2->penulis = "Gajah Mada";
$produk2->penerbit = "Bakso Tahu";
$produk2->harga = 2000000;

echo " Komik : " . $produk1->getLable();
echo "<hr>";
echo "Game : " . $produk2->getLable();

 ?>