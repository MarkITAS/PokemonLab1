<?php
require_once('Pokemon.php')

class Pidgey extends Pokemon implements Flyer {
    
    private $speed;
    private $isFlying;
    private $direction;
    private $land;
    private $takeOff;
    
    public function __construct($name, $speed, $isFlying, $direction, $land, $takeOff) {
        parent::__construct($name, 50);
        $this->speed = $speed;
    
    }
    public function attack() {
        echo "Pidgey attacks"
    }
    public function __toString() {
        
    }
    public function getDamage() {
        return $this->getWeight()*0.4;
  }
  
    $return_value = getDamage(4);
    echo "Pidgey deagls 4 damage!"
}
