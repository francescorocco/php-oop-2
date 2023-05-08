<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product {

    public $class_type = 'Giocattolo';
    public $material;
    public $color;

    public function __construct($name, $price, AnimalType $animal_type, $color, $image){
        parent::__construct($name, $price, $animal_type, $image);
        $this->color = $color;
    }
}