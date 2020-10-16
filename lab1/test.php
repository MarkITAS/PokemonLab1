<?php

//echo "Hello World!! PHP appears to be working";

//Using test script for part 4
function __autoload($class_name) {
    require_once $class_name . '.php';
}

$trainer1 = new Trainer('Bob', "trainer.png", 123, 456);
echo "<br>Here is the new Trainer: <br> $trainer1";

$bulb1 = new Bulbasaur('Bulbasaur', 'bulbasaur.png', 49.23, -123,3453);

$trainer1->add($bulb1);


$pika1 = new Pikachu("30", "30", "27", "25");
$trainer1->add($pika1);

$para1 = new Paras("33", "35", "25", "28");
$trainer1->add($Paras);




//echo "<br>Calling the Trainer's attackAll function";
$trainer1->attackAll();

//echo "<br>Here is the list of Pokemon currently in the Trainer's pokedex:";
$trainer1->printAll($pokedex);
