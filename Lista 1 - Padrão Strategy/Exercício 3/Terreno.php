<?php

require_once './Imovel.php';
require_once './DefinirValorSemEdificacao.php';

class Terreno extends Imovel
{

    public function __construct(string $localizacao, float $espaco)
    {
        parent::__construct($localizacao, $espaco);
        $this->comportamentoValor = new DefinirValorSemEdificacao();
    }
}