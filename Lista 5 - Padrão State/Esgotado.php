<?php

require_once "./State.php";

class Esgotado implements State
{
    /**
     * @var MaquinaDeBolinhas
     */
    protected $maquina;

    /**
     * Esgotado constructor.
     * @param MaquinaDeBolinhas $maquina
     */
    public function __construct(MaquinaDeBolinhas $maquina)
    {
        $this->maquina = $maquina;
    }

    public function inserirMoeda()
    {
        echo "\nA máquina está vazia!\n";
    }

    public function ejetarMoeda()
    {
        echo "\nVocê não pode ejetar uma moeda, pois você ainda não inseriu uma.\n";
    }

    public function virarManivela()
    {
        echo "\nA máquina está vazia!\n";
    }

    public function entregar()
    {
        echo "\nNenhuma bolinha de borracha fornecida.\n";
    }
}