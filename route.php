<?php

namespace Route;
class Route
{
    public static function post(){}
    public static function get(){}
    public static function delete(){}
    public static function put(){}
    public static function prefix($name){
        return $name;
    }
}