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
        echo "\nVocê não pode fazer isso!\n";
    }

    public function ejetarMoeda()
    {
        echo "\nVocê não pode fazer isso!\n";
    }

    public function virarManivela()
    {
        echo "\nVocê não pode fazer isso!\n";
    }

    public function entregar()
    {
        echo "\nParabéns! Você ganhou mais uma bolinha de borracha!\n";
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