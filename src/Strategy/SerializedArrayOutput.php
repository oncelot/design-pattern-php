<?php

namespace App\Strategy;

class SerializedArrayOutput implements \OutputInterface
{
    public function load()
    {
        return serialize($arrayOfData);
    }
}