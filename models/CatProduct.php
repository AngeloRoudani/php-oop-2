<?php


class CatProduct extends AnimalProduct {

    public $forCat;

    public function __construct($_productName, $_productImage, $_price, $_category, $_type) {

        parent::__construct($_productName, $_productImage, $_price, $_category, $_type);

    }

    public function getKind($_kind) {
        return $this->kind = $_kind;

    }
}