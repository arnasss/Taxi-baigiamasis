<?php

abstract class PassangerCar {
    protected $manufacturer;
    protected $model;
    protected $year;
    protected $wheel_count;
    protected $door_count;
    
    public function __construct($manufacturer, $model, $year, $wheel_count, $door_count) {
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->year = $year;
        $this->wheel_count = $wheel_count;
        $this->door_count = $door_count;
    }
    
    abstract public function drive();
    
    public function getWeels() {
        print "$this->model turi $this->wheel_count ratus.";
    }
    
    public function getDoors() {
        print "$this->model turi $this->door_count duris.";
    }
}

abstract class Toyota extends PassangerCar {
    protected $manufacturer = 'Toyota';
    
    public function __construct($model, $year, $wheel_count, $door_count) {
        parent::__construct($this->manufacturer, $model, $year, $wheel_count, $door_count);
    }
}

class Corolla extends Toyota {
    
    public function __construct($year) {
        parent::__construct('Corolla', $year, 4, 2);
    }

        public function drive() {
            print 'tekstas';
    }
}

$car = new Corolla(1998);
//var_dump($car);
//$car->drive();

