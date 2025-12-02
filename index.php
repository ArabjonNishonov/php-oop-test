<?php

use Route\Route;
require 'classes/dog.php';
require 'classes/Car.php';

Route::prefix('test')->group(function(){
    Route::get();
});

$goodDog = new Dog('test', '12');