<?php

class CatProducts extends AnimalProducts {

    public $forCat;

    public function __construct($_productName, $_price, $_category, $_type, $forCat) {

        parent::__construct($_productName, $_price, $_category, $_type);
        $this->forDog = $_fordog;

    }
}