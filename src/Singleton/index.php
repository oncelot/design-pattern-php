<?php

require $_SERVER['DOCUMENT_ROOT'].'\vendor\autoload.php';

use App\Singleton\Singleton;
use App\Singleton\SingletonChild;

/* decommentare per confrontare i dati
$obj = Singleton::getInstance();
var_dump($obj === Singleton::getInstance());
*/
$objChild = SingletonChild::getInstance();
var_dump($objChild === Singleton::getInstance());

var_dump($objChild === SingletonChild::getInstance());

