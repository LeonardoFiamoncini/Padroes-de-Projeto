<?php

require_once './MovimentacaoStrategy.php';

class MovimentacaoVelaStrategy implements MovimentacaoStrategy
{

    public function movimentar()
    {
        echo "\nEste barco está se movimentando à vela!\n";
    }
}