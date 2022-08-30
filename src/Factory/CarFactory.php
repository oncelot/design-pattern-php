<?php

namespace App\Factory;

use App\Factory\Car;

class CarFactory
{
public static function  create($make, $model){

    return new Car($make,$model);
}
}