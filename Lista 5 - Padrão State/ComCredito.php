<?php

require_once "./State.php";

class ComCredito implements State
{
    /**
     * @var MaquinaDeBolinhas
     */
    protected $maquina;

    /**
     * ComCredito constructor.
     * @param MaquinaDeBolinhas $maquina
     */
    public function __construct(MaquinaDeBolinhas $maquina)
    {
        $this->maquina = $maquina;
    }

    public function inserirMoeda()
    {
        echo "\nVocê não pode inserir outra moeda!\n";
    }

    public function ejetarMoeda()
    {
        echo "\nMoeda ejetada.\n";
        $this->maquina->setState($this->maquina->getSemCredito());
    }

    public function virarManivela()
    {
        echo "\nVocê virou a manivela.\n";
        $winner = rand(1, 10);

        if ($winner === 1 && $this->maquina->getCount() > 1) {
            $this->maquina->setState($this->maquina->getVencedor());
            return;
        }
        $this->maquina->setState($this->maquina->getVendido());
    }

    public function entregar()
    {
        echo "\nNenhuma bolinha de borracha entregue.\n";
    }
}