<?php

require_once 'Animal.php';
//objek dari class animal
$animal = new Animal("Harimau", "karnivora");
echo $animal->getInfo() . "\n";

require_once 'Cat.php';
//objek dari class kucing
$cat = new Cat("Kitty");
echo $cat->getInfo() . "\n";

require_once 'Dog.php';
//objek dari class anjing
$dog = new Dog("Buddy");
echo $dog->getInfo();

?>