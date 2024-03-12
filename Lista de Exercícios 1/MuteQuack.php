<?php

require_once './QuackBehaviour.php';

class MuteQuack implements QuackBehaviour {

    public function quack() {
        echo "\nCan't quack...\n";
    }
}