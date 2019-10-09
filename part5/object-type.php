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


class CetakInfoProduk {
	public function cetak(Produk $produk){
		$string = "$produk->judul | {$produk->getLable()} (Rp. {$produk->harga}) ";
		return $string;
	}
}


$produk1 = new produk("Naruto","Dicky Ardianto","Sandrais",10000);
$produk2 = new Produk("Call Of Duty","Gajah Mada","Bakso Tahu",2);



echo " Komik : " . $produk1->getLable();
echo "<hr>";
echo "Game : " . $produk2->getLable();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk2);

 ?>