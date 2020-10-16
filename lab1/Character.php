<?php
abstract class Character{

    protected $name;
    protected $image;
    protected $lat;
    protected $long;

    public function __construct($name, $image, $lat, $long)
    {
        $this->name = $name;
        $this->image = $image;
        $this->lat = (float)$lat;
        $this->long = (float)$long;
    }
    
    // setter and getter, other functions as required below here
}