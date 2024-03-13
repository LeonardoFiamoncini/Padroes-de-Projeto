<?php

require_once './Imovel.php';
require_once './DefinirValorComEdificacao.php';

class Apartamento extends Imovel {

    public function __construct(char $localizacao, float $espaco, int $comodos) {
        var_dump($localizacao);
        exit();
        parent::__construct($localizacao, $espaco, $comodos);
        $this->comportamentoValor = new DefinirValorComEdificacao();
    }
}