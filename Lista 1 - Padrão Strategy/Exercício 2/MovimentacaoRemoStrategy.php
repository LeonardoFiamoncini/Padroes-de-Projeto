<?php

require_once './MovimentacaoStrategy.php';

class MovimentacaoRemoStrategy implements MovimentacaoStrategy {
    
    public function movimentar() {
        echo "\nEste barco está se movimentando com um remo!\n";
    }
}