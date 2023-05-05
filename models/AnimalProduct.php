<?php

class AnimalProducts {

    public $productName;
    public $price;
    public $category;
    public $type;

    public function __construct($_productName, $_price, $_category, $_type) {
    
        $this->productName = $_productName;
        $this->price = $_price;
        $this->category = $_category;
        $this->type = $_type;

    }

    public function getInfoProduct() {

        return '<div>'.$this->productName.'</div>
                <div>'.$this->price.'</div>
                <div>'.$this->category.'</div>
                <div>'.$this->type.'</div>'
    }

}