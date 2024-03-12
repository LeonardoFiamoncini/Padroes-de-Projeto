<?php

class MuteQuack implements QuackBehaviour {

    public function quack() {
        echo "\nCan't quack...\n";
    }
}