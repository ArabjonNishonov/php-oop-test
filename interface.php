<?php


interface Car{
    public function getDrive();
}

class ElectricCar implements Car{
    public function getDrive(){
        return "Electric Car";
    }
}

$tesla = new ElectricCar();

var_dump($tesla->getDrive());