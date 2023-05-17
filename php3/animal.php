<?php
class Animal {
    private $nama;
    private $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "<br> Hewan ini adalah  {$this->nama}  jenis  {$this->jenis}.";
    }
}

?>