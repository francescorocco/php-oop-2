<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product {

    public $class_type = 'Toy';
    public $material;
    public $color;

    public function __construct($name, $price, AnimalType $animal_type, $color, $image){
        parent::__construct($name, $price, $animal_type, $image);
        $this->color = $color;
    }
    
    public function PrintToy(){
        '<div class="card" style="width: 18rem;">
            <img src="' .$this->image.'" class="card-img-top" alt="'.$this->name.'">
            <div class="card-body">
                <h3 class="card-title">'.$this->name.'</h3>
                <p class="card-text">Prezzo:'.$this->animal_type.'</p>
                <p class="card-text">Prezzo:'.$this->class_type.'</p>
                <p class="card-text">Prezzo:'.$this->color.'</p>
                <p class="card-text">Prezzo:'.$this->price.'€'.'</p>
            </div>
        </div>';
    }

}