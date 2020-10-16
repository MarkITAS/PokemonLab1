<?php
abstract Class Pokemon {
   protected $name;
   protected $image;
   protected $weight;
   protected $HP;
   protected $lat;
   protected $long;
   protected $type;    
   
    
   public function __construct($name, $image, $weight, $HP, $lat, $long, $type ){
      $this->name = $name;
      $this->image = $image;
      $this->weight = $weight;
      $this->HP = $HP;
      $this->lat = $lat;
      $this->long = $long;
      $this->type = $type;
   }

   public function getLong() {
      return $this->long;
   }

   public function getLat() {
      return $this->lat;
   }

   public function __toString(){
      return "Name: ".$this->name." | "."Image: ".$this->image." | "."Weight: ".$this->weight." | "."HP: ".$this->HP." | "."Type: ".$this->type." | "."Lat: ".$this->lat." | "."Long: ".$this->long."<br>";
  }
  interface __Flyer {
   function takeOff();

	function land();

	function getFlying(); // return true or false if flying

	function getSpeed();

	function getDirection();
  }
}