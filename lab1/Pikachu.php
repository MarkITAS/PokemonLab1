<?php
require_once('Pokemon.php')

class Pikachu extends Pokemon {
    public function __construct($name) {
        parent::__construct($name, 50);
    }
    public function attack() {
        echo "Pikachu attacks"
    }
    public function __toString() {
        
    }
    public function getDamage() {
        return $this->getWeight()*1.5;
      }
      
    $return_value = getDamage(4);
    echo "Pikachu deagls 4 damage!"
}
