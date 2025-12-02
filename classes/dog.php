<?php


class Dog{
    public $name;
    public $weight;
    public function __construct($name,$weight){
        $this->name = $name;
        $this->weight = $weight;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getName(){
        return $this->name;
    }
}

$bingo = new Dog('Bingo', '12kg');

echo $bingo->getName();