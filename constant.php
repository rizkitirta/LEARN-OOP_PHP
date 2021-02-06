<?php 


// define('NAMA', 'Rizki Tirta');

// echo NAMA;
// echo "<br>";


// const UMUR = 32;
// echo UMUR;


// class Coba
// {
// 	const NAMA = 'sandhika';
// }

// echo Coba::NAMA;


// echo __FILE__;




// function Coba() {
// 	return __FUNCTION__;
// }

// echo Coba();


class Coba
{
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

?>