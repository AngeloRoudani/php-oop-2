<?php

class AnimalProducts {

    public $food;
    public $games;
    public $medicines;
    public $kennels;
    public $gadgets;

    public function __construct($_food, $_games, $_medicines, $_kennels, $_gadgets) {
    
        $this->food = $_food;
        $this->games = $_games;
        $this->medicines = $_medicines;
        $this->kennels = $_kennels;
        $this->gadgets = $_gadgets;

    }

}