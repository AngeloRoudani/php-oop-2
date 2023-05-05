<?php

class AnimalProduct {

    public $productName;
    public $productImage;
    public $price;
    public $category;
    public $type;
    public $kind;

    public function __construct($_productName, $_productImage, $_price, $_category, $_type) {
    
        $this->productName = $_productName;
        $this->productImage = $_productImage;
        $this->price = $_price;
        $this->category = $_category;
        $this->type = $_type;

    }

    public function getInfoProduct() {

        return '<h2>'.$this->productName.'</h2>
                <img class="product-img" src="'.$this->productImage.'"/>
                <div>Prezzo: '.$this->price.'</div>
                <div>Prodotto: '.$this->category.'</div>
                <div>Per '.$this->type.'</div>
                <img class="kind" src="'.$this->kind.'"/>';
    }

}