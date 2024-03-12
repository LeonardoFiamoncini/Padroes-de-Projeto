<?php

class RubberDuck extends Duck {

    public function __construct() {
        $this->flyBehaviour = new FlyNoWay();
        $this->quackBehaviour = new RubberQuack();
    }
 
    public function display() {
        echo "\nLooks like a rubberduck...\n";
    }
}