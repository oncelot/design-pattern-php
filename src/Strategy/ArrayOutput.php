<?php

namespace App\Strategy;

class ArrayOutput implements \OutputInterface
{

    public function load()
    {
        return $arrayOfData;
    }
}