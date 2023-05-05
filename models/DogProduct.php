<?php

class DogProducts extends AnimalProducts {

    public $forDog;
    
    public function __construct($_productName, $_price, $_category, $_type, $forDog) {

        parent::__construct($_productName, $_price, $_category, $_type);
        $this->forDog = $_fordog;

    }
    
}