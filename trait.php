<?php


trait Eating
{
    public function eat(){
        return 'Eating and fating';
    }
}

interface Animal{
    public function eating();

}

class Dog implements Animal{
    use Eating;
    public function eating(){
        return 'Dog eating';
    }

}

$dog = new Dog();

var_dump($dog->eat());