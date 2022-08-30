<?php

namespace App\Strategy;

class JsonStringOutput implements \OutputInterface
{

    public function load()
    {
        return json_encode($arrayOfData);
    }
}