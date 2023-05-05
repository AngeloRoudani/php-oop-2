<?php

class AnimalProduct {

    public $productName;
    public $productImage;
    public $price;
    public $category;
    public $type;

    public function __construct($_productName, $_productImage, $_price, $_category, $_type) {
    
        $this->productName = $_productName;
        $this->productImage = $_productImage;
        $this->price = $_price;
        $this->category = $_category;
        $this->type = $_type;

    }

    public function getInfoProduct() {

        return '<div>'.$this->productName.'</div>
                <img class="product-img" src="'.$this->productImage.'"/>
                <div>'.$this->price.'</div>
                <div>'.$this->category.'</div>
                <div>'.$this->type.'</div>'
    }

}