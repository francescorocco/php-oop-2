<?php

require_once __DIR__ . '/Product.php';

class AnimalFood extends Product {

    public $class_type = 'Animal Food';
    public $material;
    public $composition;
    public $weight;

    public function __construct($name, $price, AnimalType $animal_type, $weight, $image){
        parent::__construct($name, $price, $animal_type, $image);
        $this->weight = $weight;
    }
    
}