<?php

require_once './QuackBehaviour.php';
require_once './FlyBehaviour.php';

abstract class Duck {
    
    /**
    * FlyBehaviour $flyBehaviour
    */
    protected $flyBehaviour;

    /**
    * QuackBehaviour $quackBehaviour
    */
    protected $quackBehaviour;


    public function setFlyBehaviour(FlyBehaviour $fb) {
        $this->flyBehaviour = $fb;
    }

    public function setQuackBehaviour(QuackBehaviour $qb) {
        $this->quackBehaviour = $qb;
    }

    public function performFly() {
        $this->flyBehaviour->fly();
    }
    
    public function performQuack() {
        $this->quackBehaviour->quack();
    }  

    abstract function display();

    public function swim() {
        echo "\nDuck's swimming...\n";
    }
}