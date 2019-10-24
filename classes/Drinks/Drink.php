<?php

declare (strict_types = 1);

class drink {
    private $data;
    
    
    
    public function getName() {
        return $this->data['name'];
    }
    
    public function setName(string $name) {
        $this->data['name'] = $name;
    }
    
    public function getAmount_ml() {
        return $this->data['amount_ml'];
    }
    
    public function setAmount_ml(int $amount_ml) {
        $this->data['amount_ml'] = $amount_ml;
    }
    
    public function getAbarot() {
        return $this->data['abarot'];
    }
    
    public function setAbarot(float $abarot) {
        $this->data['abarot'] = $abarot;
    }
    
    public function getImage() {
        return $this->data['image'];
    }
    
    public function setImage(string $image) {
        $this->data['image'] = $image;
    }
    
}