<?php

class Car
{
    public $model;
    public $year;
    public function drive()
    {
        return 'driving';
    }

    public function setModel($model){
        $this->model = $model;
    }

    public function setYear($year){
        $this->year = $year;
    }

    public function getModel(){
        return $this->model;
    }

    public function getYear(){
        return $this->year;
    }

}

$bmw = new Car();
$bmw->model = "bmw";
$bmw->year = 2012;

class ElectricCar extends Car
{
    public $battary;

    public function charge(){
        return 'charging';
    }
}

$tesla = new ElectricCar();

var_dump($tesla);
//var_dump($bmw->getModel($bmw));
//var_dump($bmw);
