<?php

require_once './Imovel.php';
require_once './DefinirValorSemEdificacao.php';

class Terreno extends Imovel {

    public function __construct() {
        $this->comportamentoValor = new DefinirValorSemEdificacao();
    }
}