<?php

require_once __DIR__ .'/../Traits/Weightable.php';

class DogProduct extends AnimalProduct {

    use Weight;
    public $forDog;
    
    public function __construct($_productName, $_productImage, $_price, $_category, $_type) {

        parent::__construct($_productName, $_productImage, $_price, $_category, $_type);
        
    }

    public function getKind($_kind) {

        return $this->kind = $_kind;

    }

    public function calcDiscount() {

        if (!is_numeric($this->price)) {
            throw new Exception('Prezzo non definito');
        } else if (($this->price) > 15) {
            return "<div> Hai uno sconto di" . ($this->price - (($this->price / 100) * 10)) . "</div>";
        }

    }
    
}