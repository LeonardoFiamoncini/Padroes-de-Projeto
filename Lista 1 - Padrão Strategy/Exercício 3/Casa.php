<?php

require_once './Imovel.php';
require_once './DefinirValorComEdificacao.php';

class Casa extends Imovel
{

    public function __construct(string $localizacao, float $espaco, int $comodos)
    {
        parent::__construct($localizacao, $espaco, $comodos);
        $this->comportamentoValor = new DefinirValorComEdificacao();
    }
}