<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . './../Traits/Colorable.php';


class AnimalKennel extends Product {

    use Colorable;
    public $class_type = 'Cuccia';
    public $material;
    public $size;

    public function __construct($name, $price, AnimalType $animal_type, $color, $image){
        parent::__construct($name, $price, $animal_type, $image);
        $this->color = $color;

    }

}