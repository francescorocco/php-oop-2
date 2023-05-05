<?php

require_once __DIR__ . '/Product.php';

class AnimalKennel extends Product {

    public $class_type = 'Kennel';
    public $material;
    public $color;
    public $size;

    public function __construct($name, $price, AnimalType $animal_type, $color, $image){
        parent::__construct($name, $price, $animal_type, $image);
        $this->color = $color;

    }
}