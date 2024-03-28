<?php

require_once './Duck.php';
require_once './FlyWithWings.php';
require_once './Quack.php';

class RedheadDuck extends Duck
{

    public function __construct()
    {
        $this->flyBehaviour = new FlyWithWings();
        $this->quackBehaviour = new Quack();
    }

    public function display()
    {
        echo "\nThat's the Redhead duck!\n";
    }
}