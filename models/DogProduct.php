<?php


class DogProduct extends AnimalProduct {

    public $forDog;
    
    public function __construct($_productName, $_productImage, $_price, $_category, $_type) {

        parent::__construct($_productName, $_productImage, $_price, $_category, $_type);
        
    }

    public function getKind($_kind) {

        return $this->kind = $_kind;

    }
    
}