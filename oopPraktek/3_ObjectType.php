<?php 

class Produk {

	public $judul ,
	       $pembuat,
		   $penerbit,
		   $harga;

	public function __construct($judul = "Judul",$pembuat = "Pembuat",$penerbit = "Penerbit",$harga = 0) {
		$this->judul = $judul;
		$this->pembuat = $pembuat;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel() {
		return "$this->pembuat, $this->penerbit";
	}

	public function infoProduk() {
		return "$this->judul, $this->pembuat, $this->penerbit, $this->harga";
	}
}

class CetakInfoProduk {

	public function cetak( Produk $produk ) {
		$str = " {$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga}) ";
		return $str;
	}
}


$produk1 = new Produk("Flutter", "Dicoding", "Google.com", "1.200.000");

$produk2 = new Produk("React Native", "Facebook-Team", "Facebook", "800.000");

$produk3 = new Produk("Kotlin", "Jetbrains");



$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

echo "<br>";

$infoProduk2 = new CetakInfoProduk();
echo $infoProduk2->cetak($produk2)
?>