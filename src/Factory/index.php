<?php

require $_SERVER['DOCUMENT_ROOT'].'\vendor\autoload.php';
use App\Factory\CarFactory;

$car= CarFactory::create('Bugatti','Veyron');

print_r($car->getMakeAndModel());
