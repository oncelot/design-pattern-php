<?php

namespace App\Singleton;

class Singleton
{
public static function getInstance(){
    static $instance = null;
    if(null === $instance) {
        $instance = new static();
    }
    return $instance;

}
    protected function __construct(){

    }

    protected function __clone(){}

    protected function __wakeup(){}
}