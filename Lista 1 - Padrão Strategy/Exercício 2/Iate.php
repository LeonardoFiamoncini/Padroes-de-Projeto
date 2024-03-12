<?php

require_once './Barco.php';
require_once './MovimentacaoMotorStrategy.php';

class Iate extends Barco {

    public function __construct() {
        $this->movimento = new MovimentacaoMotorStrategy();
    }

    public function exibir() {
        echo "\nTrata-se do Iate!\n";
    }
}