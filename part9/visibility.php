<?php 

class Produk {
	public $judul, 
		   $penulis,
		   $penerbit;

	protected $diskon = 0;

   	private $harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
		$this->judul 		= $judul;
		$this->penulis 		= $penulis;
		$this->penerbit 	= $penerbit;
		$this->harga 		= $harga;
	}

	public function steDiskon($diskon) {
		$this->diskon = $diskon;
	}

	public function getHarga() {
		return $this->harga -  ($this->harga * $this->diskon / 100);
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
	public $jmlHalaman;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ) {
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoProduk() {
		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public $waktuMain;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ) {
		parent::__construct($judul, $penulis, $penerbit, $harga); 
		$this->waktuMain = $waktuMain;
	} 

	public function getInfoProduk() {
		$str = "Game : ". parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}



class CetakInfoProduk {
	public function cetak(Produk $produk){
		$string = "$produk->judul | {$produk->getLable()} (Rp. {$produk->harga}) ";
		return $string;
	}
}



$produk1 = new Komik("Naruto Ship","Dicky Ardianto","Sandrais",10000, 100);
$produk2 = new Game("Call Of Duty","Gajah Mada","Bakso Tahu",250,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->steDiskon(50);
echo $produk2->getHarga();


 ?>