<?php

namespace App\AbstractFactory;

class LaunchWriteFactory
{
    public function createCsvJson(WriterFactory $obj){

        $obj->createCsvWriter();
        $obj->createJsonWriter();
    }

}