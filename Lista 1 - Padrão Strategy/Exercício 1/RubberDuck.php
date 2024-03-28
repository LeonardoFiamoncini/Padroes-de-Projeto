<?php

require_once './Duck.php';
require_once './Squeak.php';
require_once './FlyNoWay.php';

class RubberDuck extends Duck
{

    public function __construct()
    {
        $this->flyBehaviour = new FlyNoWay();
        $this->quackBehaviour = new Squeak();
    }

    public function display()
    {
        echo "\nLooks like a rubberduck...\n";
    }
}