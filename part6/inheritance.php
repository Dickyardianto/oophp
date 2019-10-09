<?php 

class Produk {
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 , $jmlHalaman = 0, $waktuMain = 0){
		$this->judul 		= $judul;
		$this->penulis 		= $penulis;
		$this->penerbit 	= $penerbit;
		$this->harga 		= $harga;
		$this->jmlHalaman 	= $jmlHalaman;
		$this->waktuMain 	= $waktuMain;
	}

	public function getLable(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";
		
		return $str;
	}

}

class Komik extends Produk {
	public function getInfoProduk() {
		$str = "Komik : {$this->judul} | {$this->getLable()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->getLable()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
		return $str;
	}
}



class CetakInfoProduk {
	public function cetak(Produk $produk){
		$string = "$produk->judul | {$produk->getLable()} (Rp. {$produk->harga}) ";
		return $string;
	}
}



$produk1 = new Komik("Naruto Ship","Dicky Ardianto","Sandrais",10000, 100, 0);
$produk2 = new Game("Call Of Duty","Gajah Mada","Bakso Tahu",250, 0,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


 ?>