<?php

namespace App\AbstractFactory;
$myOperatingSystem="Win";

$OSLinux="Linux";
$OSWindow="Win";



if($myOperatingSystem == $OSLinux){
    $unix = new UnixWriterFactory();
    $launch= new LaunchWriteFactory();
    $launch::createCsvJson($unix);
    $launch2=new UnixWriterFactory();
    $launch2::createJsonWriter();
    $launch2::createCsvWriter();
}
if($myOperatingSystem == $OSWindow){
    $win = new WinWriterFactory();
    $launch= new LaunchWriteFactory();
    $launch::createCsvJson($win);

}

