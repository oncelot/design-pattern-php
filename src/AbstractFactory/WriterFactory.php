<?php

namespace App\AbstractFactory;

interface WriterFactory
{
public function createCsvWriter() : CsvWriter;
public function createJsonWriter() : JsonWriter;
}