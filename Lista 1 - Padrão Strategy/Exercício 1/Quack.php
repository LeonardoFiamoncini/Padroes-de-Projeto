<?php

require_once './QuackBehaviour.php';

class Quack implements QuackBehaviour {

    public function quack() {
        echo "\nQuack quack...\n";
    }
}