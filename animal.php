<?php


interface Animal
{
    public function setName($name);

    public function getName();

    public function makeSound();

    public function eat();

    public function run();

    public function getSpeed();

    public function setSpeed($speed);

    public function getColor();

    public function setColor($color);
}

class Dog implements Animal{
    public $color;
    public $speed;

    public function __construct($color, $speed){
        $this->color = $color;
        $this->speed = $speed;
    }
    public function setName($name){
        return $name;
    }

    public function getName(){
        return "Dog";
    }

    public function makeSound(){
        return "Vov vov";
    }

    public function eat(){
        return "Eating meal";
    }

    public function run(){
        return "Running dog";
    }

    public function setSpeed($speed){
        return $speed;
    }

    public function getSpeed(){
        return $this->speed;
    }

    public function setColor($color){
        return $color;
    }

    public function getColor(){
        return $this->color;
    }

}
