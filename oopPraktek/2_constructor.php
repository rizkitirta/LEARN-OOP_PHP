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
		return "$this->judul, $this->penerbit";
	}

	public function infoProduk() {
		return "$this->judul, $this->pembuat, $this->penerbit, $this->harga";
	}
}


$produk1 = new Produk("Flutter", "Dicoding", "Google.com", "1000");

$produk2 = new Produk("React Native", "Facebook-Team", "Facebook", "800");

$produk3 = new Produk("Kotlin", "Jetbrains");

echo "Buku : " . $produk1->getLabel();
echo "<br>";
echo "Buku : " . $produk1->infoProduk();
echo "<br>";
echo "Buku : " . $produk2->getLabel();
echo "<br>";
echo "Buku : " . $produk2->infoProduk();
echo "<br>";
echo "Buku : " . $produk3->infoProduk();


?>