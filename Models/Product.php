<?php
require_once __DIR__ . '/AnimalType.php';
require_once __DIR__ . '/Toy.php';



class Product   {

    public $class_type = 'Prodotto';
    public $name;
    public $animal_type;
    protected $price;
    public $description;
    protected $image;
    


    public function __construct($name, $price, AnimalType $animal_type, $image){
        $this->name = $name;
        $this->price = $price;
        $this->animal_type = $animal_type;
        $this->image = $image;
    }


}