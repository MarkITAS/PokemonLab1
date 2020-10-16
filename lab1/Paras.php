<?php
require_once('Pokemon.php')

class Paras extends Pokemon {
    public function __construct($name) {
        parent::__construct($name, 50);
    }
    public function attack() {
        echo "Paras attacks"
    }
    public function __toString() {
        
    }
    public function getDamage() {
        return $this->getWeight()*0.8;
      }
      
    $return_value = getDamage(3);
    echo "Paras deagls 3 damage!"
}
