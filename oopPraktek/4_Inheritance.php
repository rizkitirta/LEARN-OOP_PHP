<?php 

class Produk {

	public $judul ,
	       $pembuat,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain,
		   $tipe;

	public function __construct($judul = "Judul", $pembuat = "Pembuat", $penerbit = "Penerbit",
	$harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "tipe") {
		$this->judul = $judul;
		$this->pembuat = $pembuat;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	public function getLabel() {
		return "$this->pembuat, $this->penerbit";
	}

	
   public function getDetailProduk() {
   //Komik : Kotlin | Jetbrains-Team, Jetbrains (Rp.750.000) ~ 100 Halaman.
	$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

	if($this->tipe == "Komik") {
		$str .= " ~ {$this->jmlHalaman} Halaman.";
	}else if ($this->tipe == "Game") {
		$str .= " ~ {$this->waktuMain} Jam.";
	}
       return $str;
   }

}



class CetakInfoProduk {

	public function cetak( Produk $produk ) {
		$str = " {$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga}) ";
		return $str;
	}
}


$produk1 = new Produk("Flutter", "Dicoding", "Google.com", "1.200.000",100,0,"Komik");

$produk2 = new Produk("React Native", "Facebook-Team", "Facebook", "800.000",50,0,"Game");

$produk3 = new Produk("Kotlin", "Jetbrains-Team", "Jetbrains", "750.000", 100, 0, "Komik" );


echo $produk1->getDetailProduk();
echo '<br>';
echo $produk2->getDetailProduk();
echo '<br>';
echo $produk3->getDetailProduk();
?>