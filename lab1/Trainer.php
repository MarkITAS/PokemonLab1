<?php
require_once('Pokemon.php')
require_once('Character.php')

class Trainer extends Character {
    protected $name
    protected $pokedex = array();

    public function __construct($name) {
        $pokedex

        parent::__construct($name,
    "trainer.png" , $lat, $long);
            $this->pokedex = array();

    }


    public function addPokemon($pokedex) {
        $this->pokemon[] = $pokedex
    }

    public function removePokemon(Pokemon $pokemon) {

        if (($key = array_search($pokemon, $this->pokedex)) !== false) {
            unset($this->pokedex[$key]);
            // re-index (or 'rebase') the array
            $this->pokedex = array_values($this->pokedex);
        }
    }


    public function attackALL(Pokemon $other) {
        echo "All pokemon attack " . $other->name . "! ! ";
            foreach ($this->pokedex as $pokemon) {
                $pokemon->attack($other);
            }
    }

    public function Attack(Pokemon $other) {
        $other->hp = $other->hp - $this->getDamage();
            echo "<br>" . $this->name . 
            " attacked " . $other->name . "! !";

            echo "<br>" . $other->name . 
            "'s HP is now only " . $other->hp;
    
    }

}