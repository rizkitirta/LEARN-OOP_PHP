<?php 

class Produk {

	public $judul = "judul",
	       $pembuat = "pembuat",
		   $penerbit = "penerbit",
		   $harga = "0";

	public function getLabel() {
		return "$this->judul, $this->penerbit";
	}

	public function infoProduk() {
		return "$this->judul, $this->pembuat, $this->penerbit";
	}
}


$produk1 = new Produk();
$produk1->judul = "Flutter";
$produk1->pembuat = "Dicoding";
$produk1->penerbit = "Google.com";
$produk1->harga = 1000;

$produk2 = new Produk();
$produk2->judul = "React Native";
$produk2->pembuat = "Facebook Team";
$produk2->penerbit = "Facebook.com";
$produk2->harga = 800;

echo "Buku : " . $produk1->getLabel();
echo "<br>";
echo "Buku : " . $produk2->getLabel();
echo "<br>";
echo "Buku : " . $produk2->infoProduk();

?>