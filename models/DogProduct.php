<?php

require __DIR__ .'/data/dataProducts.php';

class DogProduct extends AnimalProduct {

    public $forDog;
    
    public function __construct($_productName, $_productImage, $_price, $_category, $_type, $forDog) {

        parent::__construct($_productName, $_productImage, $_price, $_category, $_type);
        $this->forDog = $_fordog;

    }
    
}