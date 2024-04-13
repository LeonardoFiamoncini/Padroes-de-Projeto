<?php

require_once "./State.php";

class Vendido implements State
{
    /**
     * @var MaquinaDeBolinhas
     */
    protected $maquina;

    /**
     * Vendido constructor.
     * @param MaquinaDeBolinhas $maquina
     */
    public function __construct(MaquinaDeBolinhas $maquina)
    {
        $this->maquina = $maquina;
    }

    public function inserirMoeda()
    {
        echo "\nEspere, sua bolinha de borracha já está saindo da máquina\n";
    }

    public function ejetarMoeda()
    {
        echo "\nVocê já virou a manivela!\n";
    }

    public function virarManivela()
    {
        echo "\nVirar a manivela duas vezes não te dará duas bolinhas de borracha...\n";
    }

    public function entregar()
    {
        $this->maquina->liberarBolinha();

        if ($this->maquina->getCount() <= 0) {
            echo "\nOops, as bolinhas de borracha acabaram!\n";
            $this->maquina->setState($this->maquina->getEsgotado());

        } else {
            $this->maquina->setState($this->maquina->getSemCredito());
        }
    }
}