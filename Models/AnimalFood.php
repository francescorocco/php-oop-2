<?php

require_once __DIR__ . '/Product.php';

class AnimalFood extends Product {

    public $class_type = 'Cibo per animali';
    public $composition;
    public $weight;

    public function __construct($name, $price, AnimalType $animal_type, $image){
        parent::__construct($name, $price, $animal_type, $image);
    }

    public function setWeight($weight){
        if(!is_float($weight)){
            throw new Exception('Il valore inserito deve essere un numero');
        }else{
            $this->weight = $weight;
        }
    }
}