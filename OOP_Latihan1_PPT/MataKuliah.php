<?php 
class MataKuliah{
    private $kode;
    private $namaMataKuliah;

    public function setData($kode,$namaMataKuliah){
        $this->kode = $kode;
        $this->namaMataKuliah = $namaMataKuliah;
    }
    public function getData(){
        return [$this->kode,$this->namaMataKuliah];
    }
}
?>