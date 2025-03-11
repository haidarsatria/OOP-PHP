<?php
include "Mahasiswa.php";

$mahasiswa_1 = new Mahasiswa();


$mahasiswa_1->setData("A11.2023.12345", "Haidar Satria", "2025-01-17");

echo "Umur dihitung dengan rumus : <br> ";
var_dump($mahasiswa_1->getData()[3]);
echo "<br>";

echo "Nilai umur diberi langsung : <br> ";
$mahasiswa_1->umur = 100;
var_dump($mahasiswa_1->umur);
?>
