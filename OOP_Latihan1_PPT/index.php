<?php 
include "Mahasiswa.php";
include "MataKuliah.php";

$mahasiswa_1 = new Mahasiswa();
$mataKuliah_1 = new MataKuliah();

$mahasiswa_1->setData("A11.2023.15241","Haidar Satria Hadi Wibowo");
$mataKuliah_1->setData("A11.1234","Pemrograman Web Lanjut");

var_dump($mahasiswa_1->getData());
echo"<br>";
var_dump($mataKuliah_1->getData());
?>