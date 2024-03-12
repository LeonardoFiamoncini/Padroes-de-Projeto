<?php

require_once './Barco.php';
require_once './MovimentacaoRemoStrategy.php';

class Jangada extends Barco {

    public function __construct() {
        $this->movimento = new MovimentacaoRemoStrategy();
    }

    public function exibir() {
        echo "\nTrata-se da Jangada!\n";
    }
}