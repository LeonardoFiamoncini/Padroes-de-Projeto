<?php

require_once "./State.php";

class Vencedor implements State
{
    /**
     * @var MaquinaDeBolinhas
     */
    protected $maquina;

    /**
     * Vencedor constructor.
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
        echo "\nVocê já acionou a alavanca!\n";
    }

    public function virarManivela()
    {
        echo "\nVirar a manivela duas vezes não te dará duas bolinhas de borracha...\n";
    }

    public function entregar()
    {
        echo "\nParabéns! Você ganhou mais uma bolinha de borracha de brinde!\n";
        $this->maquina->liberarBolinha();
        if ($this->maquina->getCount() === 0) {
            $this->maquina->setState($this->maquina->getEsgotado());
        } else {
            $this->maquina->liberarBolinha();
            if ($this->maquina->getCount() > 0) {
                $this->maquina->setState($this->maquina->getSemCredito());
            } else {
                echo "\nOops, as bolinhas de borracha acabaram!\n";
                $this->maquina->setState($this->maquina->getEsgotado());
            }
        }
    }
}