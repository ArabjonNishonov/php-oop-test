<?php

abstract class Car
{
    public $model;
    public $year;
    protected $km;
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
    abstract public function getDrive();
}

class ElectricCar extends Car
{

    public function getDrive(){
        return 'electric driving';
    }
    public function test(){
        return 'test';
    }
}

$testCar = new ElectricCar();

var_dump($testCar->getDrive());