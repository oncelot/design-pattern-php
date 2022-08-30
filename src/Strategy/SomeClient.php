<?php

namespace App\Strategy;

class SomeClient
{
    private $output;

    public function setOutput(\OutputInterface $outputType){}

    public function loadOutput(){return $this->output->load();}
}