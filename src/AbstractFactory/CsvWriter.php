<?php

namespace App\AbstractFactory;

interface  CsvWriter
{
    public  function write(array $line) : string;
}