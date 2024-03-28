<?php

require_once './Duck.php';
require_once './FlyNoWay.php';
require_once './MuteQuack.php';

class DecoyDuck extends Duck
{

    public function __construct()
    {
        $this->flyBehaviour = new FlyNoWay();
        $this->quackBehaviour = new MuteQuack();
    }

    public function display()
    {
        echo "\nLooks like a decoy duck...\n";
    }
}