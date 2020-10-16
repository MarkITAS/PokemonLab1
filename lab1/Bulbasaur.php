<?php
require_once('Pokemon.php') 

class Bulbasaur extends Pokemon {
    public function __construct($name) {
        parent::__construct($name, 50);
    }
    public function attack() {
        echo "Bulbsaur attacks"
    }
    public function __toString() {
        
    }
    public function getDamage() {
        return $this->getWeight()*0.3;
      }
      
    $return_value = getDamage(2);
    echo "Bulbasaur deagls 2 damage!"
}

