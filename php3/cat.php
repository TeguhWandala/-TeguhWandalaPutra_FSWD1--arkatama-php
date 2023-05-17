<?php

require_once 'Animal.php';

class Cat extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "kucing");
    }

    public function getInfo() {
        $animalInfo = parent::getInfo();
        return $animalInfo . " Kucing adalah hewan yang suka bermain dan bersih.";
    }
}

?> 