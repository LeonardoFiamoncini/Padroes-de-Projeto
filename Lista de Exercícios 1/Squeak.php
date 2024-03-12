<?php

require_once './QuackBehaviour.php';

class Squeak implements QuackBehaviour {

    public function quack() {
        echo "\nSqueak squeak...\n";
    }
}