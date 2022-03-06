<?php

namespace App\AbstractFactory;

interface JsonWriter
{
public function write(array $data, bool $formatted) : string;
}