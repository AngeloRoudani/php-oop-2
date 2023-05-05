<?php

require __DIR__ .'/data/dataProducts.php';

class CatProduct extends AnimalProduct {

    public $forCat;

    public function __construct($_productName, $_productImage, $_price, $_category, $_type, $forCat) {

        parent::__construct($_productName, $_productImage, $_price, $_category, $_type);
        $this->forDog = $_fordog;

    }
}