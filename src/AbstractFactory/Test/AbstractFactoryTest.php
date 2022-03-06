<?php

namespace App\AbstractFactory\Test;
use App\AbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
public function provideFactory(){
    return [
        [new AbstractFactory\UnixWriterFactory()],
        [new AbstractFactory\WinWriterFactory()]
    ];
}

    /**
     * @dataProvider provideFactory
     */
public function testCanCreateCsvWriterOnUnix(AbstractFactory\WriterFactory $writeFactory){
    $this::assertInstanceOf(AbstractFactory\JsonWriter::class,$writeFactory->createJsonWriter());
    $this::assertInstanceOf(AbstractFactory\CsvWriter::class,$writeFactory->createCsvWriter());

}
}