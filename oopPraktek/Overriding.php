<?php 

class Produk {

	public $judul ,
	       $pembuat,
		   $penerbit,
		   $harga;


	public function __construct($judul = "Judul", $pembuat = "Pembuat", $penerbit = "Penerbit",
	$harga = 0) {
		$this->judul = $judul;
		$this->pembuat = $pembuat;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() {
		return "$this->pembuat, $this->penerbit";
	}

	
   public function getDetailProduk() {
   //Komik : Kotlin | Jetbrains-Team, Jetbrains (Rp.750.000) ~ 100 Halaman.
	$str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
       return $str;
   }

}


class Komik extends Produk {
	public $jmlHalaman;

	public function __construct($judul = "Judul", $pembuat = "Pembuat", $penerbit = "Penerbit",
	$harga = 0, $jmlHalaman = 0) {
		parent::__construct($judul, $pembuat, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getDetailProduk(){
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) ~ {$this->jmlHalaman} Halaman.";
		return $str;
	}
}


class Game extends Produk {
	public $waktuMain;

	public function __construct($judul = "Judul", $pembuat = "Pembuat", $penerbit = "Penerbit",
	$harga = 0, $waktuMain = 0) {
		parent::__construct($judul, $pembuat, $penerbit,$harga);

		$this->waktuMain = $waktuMain;
	}

	public function getDetailProduk(){
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) ~ {$this->waktuMain} Jam.";
		return $str;
	}
}


class CetakInfoProduk {

	public function cetak( Produk $produk ) {
		$str = " {$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga}) ";
		return $str;
	}
}


$produk1 = new Komik("Flutter", "Dicoding", "Google.com", "1.200.000", 100);

$produk2 = new Komik("React Native", "Facebook-Team", "Facebook", "800.000", 50);

$produk3 = new Game("Clash of Clans", "Supercell-Team", "Supercell", "10.000", 300 );

$produk4 = new Game("Free Fire", "Garena-Team", "Garena","12.000", 200);


echo $produk1->getDetailProduk();
echo '<br>';
echo $produk2->getDetailProduk();
echo '<br>';
echo $produk3->getDetailProduk();
echo '<br>';
echo $produk4->getDetailProduk();
?>