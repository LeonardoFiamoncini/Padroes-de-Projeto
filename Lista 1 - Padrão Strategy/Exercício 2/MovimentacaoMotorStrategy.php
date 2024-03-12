<?php

require_once './MovimentacaoStrategy.php';

class MovimentacaoMotorStrategy implements MovimentacaoStrategy {
    
    public function movimentar() {
        echo "\nEste barco está se movimentando com um motor!\n";
    }
}