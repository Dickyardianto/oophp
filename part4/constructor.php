<?php 

class Produk {
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLable(){
		return "$this->penulis, $this->penerbit";
	}
}


$produk1 = new produk("Naruto","Dicky Ardianto","Sandrais",10000);
$produk2 = new Produk("Call Of Duty","Gajah Mada","Bakso Tahu",2);
$produk3 = new Produk("Call Of Duty");


echo " Komik : " . $produk1->getLable();
echo "<hr>";
echo "Game : " . $produk2->getLable();
var_dump($produk3); 

 ?>