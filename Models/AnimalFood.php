<?php

require_once __DIR__ . '/Product.php';

class AnimalFood extends Product {

    public $class_type = 'Cibo per animali';
    public $composition;
    public $weight;

    public function __construct($name, $price, AnimalType $animal_type, $weight, $image){
        parent::__construct($name, $price, $animal_type, $image);
        $this->weight = $weight;
    }
    

    public function PrintFood(){
        return
        '<div class="card" style="width: 18rem;">
            <img class="img-gatto" src="' .$this->image.'" class="card-img-top" alt="'.$this->name.'">
            <div class="card-body">
                <h3 class="card-title">'.$this->name.'</h3>
                <p class="card-text">'.$this->animal_type->name.'</p>
                <p class="card-text">Tipologia: '.$this->class_type.'</p>
                <p class="card-text">Peso: '.$this->weight.'</p>
                <p class="card-text">Composizione: '.$this->composition.'</p>
                <p class="card-text">Prezzo: '.$this->price.'€'.'</p>
            </div>
        </div>';
    }

}