<?php

class MallardDuck extends Duck {

    public function __construct() {
        $this->flyBehaviour = new FlyWithWings();
        $this->quackBehaviour = new Quack();
    }

    public function display() {
        echo "\nI'm a real Mallard duck!\n";
    }
}