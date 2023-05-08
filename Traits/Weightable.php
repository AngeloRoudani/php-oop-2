<?php


trait Weight {

    public $weight;

    public function setWeight($_weight) {

        $this->weight = $_weight;
    }

    public function getWeight() {

        return $this->weight;

    }
}