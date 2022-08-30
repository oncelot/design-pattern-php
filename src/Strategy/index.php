<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

use \App\Strategy\SomeClient;
use \App\Strategy\ArrayOutput;
use \App\Strategy\JsonStringOutput;
use \App\Strategy\SerializedArrayOutput;


$client = new SomeClient();

$client->setOutput(new ArrayOutput());
$data = $client->loadOutput();

$client->setOutput(new JsonStringOutput());
$data = $client->loadOutput();

$client->setOutput(new SerializedArrayOutput());
$data = $client->loadOutput();