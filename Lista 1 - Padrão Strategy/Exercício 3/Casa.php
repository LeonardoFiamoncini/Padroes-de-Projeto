<?php

require_once './Imovel.php';
require_once './DefinirValorComEdificacao.php';

class Casa extends Imovel {

    public function __construct() {
        $this->comportamentoValor = new DefinirValorComEdificacao();
    }
}