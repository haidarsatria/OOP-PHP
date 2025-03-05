<?php
 class Mahasiswa{

 public $nim;
 public $nama;
 public $programStudi;
 public function setData($nim, $nama, $programStudi)
 {
 $this->nim = $nim;
 $this->nama = $nama;
 $this->programStudi = $programStudi;
 }
 public function getData(){
 return [
 'nim' => $this->nim,
 'nama' => $this->nama,
 'programStudi' => $this->programStudi
 ];
 }
 public function TampilData(){
    echo "<div style=' display:flex flex-direction:column;'>";
    echo "<p>NIM: " . $this->nim . "</p>";
    echo "<p>Nama: " . $this->nama . "</p>";
    echo "<p>Program Studi: " . $this->programStudi . "</p>";
    echo "</div>";
}

 } 