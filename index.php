<?php

class Car {
    private $marke;
    private $fuel;


    public function _construct($marke) {
        $this -> marke = $marke;
        $this-> fuel = 0;
    }
    
    public function addFuel($amount) {
        $this-> fuel = $amount;
    }
}

$fiat = new Car('Fiat');
$fiat ->addFuel(5);
var_dump($fiat);

$toyota = new Car('Toyota');
$toyota ->addFuel(15);
var_dump($toyota);

