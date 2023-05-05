<?php

require_once __DIR__ . '/Product.php';

class AnimalKennel extends Product {

    public $class_type = 'Cuccia';
    public $material;
    public $color;
    public $size;

    public function __construct($name, $price, AnimalType $animal_type, $color, $image){
        parent::__construct($name, $price, $animal_type, $image);
        $this->color = $color;

    }

    public function PrintKennel(){
        return
        '<div class="card" style="width: 18rem;">
                <img class="img-gatto" src="' .$this->image.'" class="card-img-top" alt="'.$this->name.'">
            <div class="card-body">
                <h3 class="card-title">'.$this->name.'</h3>
                <p class="card-text">'.$this->animal_type->name.'</p>
                <p class="card-text">Tipologia: '.$this->class_type.'</p>
                <p class="card-text">Colore: '.$this->color.'</p>
                <p class="card-text">Grandezza: '.$this->size.'</p>
                <p class="card-text">Prezzo: '.$this->price.'€'.'</p>
            </div>
        </div>';
    }
}