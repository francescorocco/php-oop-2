<?php
require_once __DIR__ . '/AnimalType.php';
require_once __DIR__ . '/AnimalKennel.php';
require_once __DIR__ . '/Toy.php';
require_once __DIR__ . './../Traits/Colorable.php';


class Product
{

    public $class_type = 'Prodotto';
    public $name;
    public $animal_type;
    public $price;
    public $description;
    public $image;



    public function __construct($name, $price, AnimalType $animal_type, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->animal_type = $animal_type;
        $this->image = $image;
    }


    public function getClassName()
    {
        return get_class($this);
    }
}
