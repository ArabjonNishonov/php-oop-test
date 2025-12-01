<?php

class Animal
{
    public $name;
    public $speed;

    public function __construct($name, $speed)
    {
        $this->name = $name;
        $this->speed = $speed;
    }

    public function eat(){
        return 'eating';
    }

    public function getSpeed(){
        return $this->speed;
    }
    public static function run(){
        return 'running';
    }
}

$dog = new Animal('Backet', '120km');

var_dump($dog->eat());

var_dump(Animal::run());