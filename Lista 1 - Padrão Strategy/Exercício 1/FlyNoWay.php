<?php

require_once './FlyBehaviour.php';

class FlyNoWay implements FlyBehaviour
{

    public function fly()
    {
        echo "\nCan't fly...\n";
    }
}