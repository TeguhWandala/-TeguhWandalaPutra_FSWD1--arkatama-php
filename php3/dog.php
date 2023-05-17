<?php

require_once 'Animal.php';

class Dog extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "anjing");
    }

    public function getInfo() {
        $animalInfo = parent::getInfo();
        return $animalInfo . " Anjing adalah hewan yang setia dan cerdas.";
    }
}

?>