<?php

class drink {
    private $name;
    private $amount_ml;
    private $abarot;
    private $image;
    
    public function getName() {
        return $this->name;
    }
    
    public function setName(string $name) {
        $this->name = $name;
    }
    
    public function getAmount_ml() {
        return $this->amount_ml;
    }
    
    public function setAmount_ml(int $amount_ml) {
        $this->amount_ml = $amount_ml;
    }
    
    public function getAbarot() {
        return $this->abarot;
    }
    
    public function setAbarot(float $abarot) {
        $this->abarot = $abarot;
    }
    
    public function getImage() {
        return $this->image;
    }
    
    public function setImage(string $image) {
        $this->image = $image;
    }
    
}