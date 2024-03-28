<?php

require_once './Barco.php';
require_once './MovimentacaoVelaStrategy.php';

class BarcoVela extends Barco
{

    public function __construct()
    {
        $this->movimento = new MovimentacaoVelaStrategy();
    }

    public function exibir()
    {
        echo "\nTrata-se do Barco à Vela!\n";
    }
}