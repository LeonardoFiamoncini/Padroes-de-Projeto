<?php

require_once "./State.php";

class SemCredito implements State
{
    /**
     * @var MaquinaDeBolinhas
     */
    protected $maquina;

    /**
     * SemCredito constructor.
     * @param MaquinaDeBolinhas $maquina
     */
    public function __construct(MaquinaDeBolinhas $maquina)
    {
        $this->maquina = $maquina;
    }

    public function inserirMoeda()
    {
        echo "\nVocê inseriu uma moeda.\n";
        $this->maquina->setState($this->maquina->getComCredito());
    }

    public function ejetarMoeda()
    {
        echo "\nNão é possível ejetar, pois nenhuma moeda foi inserida!\n";

    }

    public function virarManivela()
    {
        echo "\nVocê virou a manivela, mas não há nenhuma moeda.\n";
    }

    public function entregar()
    {
        echo "\nVocê precisa pagar pelas bolinhas de borracha!\n";
    }
}