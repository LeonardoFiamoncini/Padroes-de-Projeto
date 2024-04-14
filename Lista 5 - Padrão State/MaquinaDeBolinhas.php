<?php

require_once "./Esgotado.php";
require_once "./SemCredito.php";
require_once "./ComCredito.php";
require_once "./Vendido.php";
require_once "./Vencedor.php";

class MaquinaDeBolinhas
{
    /**
     * @var Esgotado
     */
    protected $esgotado;

    /**
     * @var SemCredito
     */
    protected $semCredito;

    /**
     * @var ComCredito
     */
    protected $comCredito;

    /**
     * @var Vendido
     */
    protected $vendido;

    /**
     * @var Vencedor
     */
    protected $vencedor;

    /**
     * @var Esgotado|SemCredito
     */
    protected $state;

    /**
     * @var int
     */
    protected $count;

    /**
     * MaquinaDeBolinhas constructor.
     * @param int $numeroDeBolinhas
     */
    public function __construct(int $numeroDeBolinhas)
    {
        $this->esgotado = new Esgotado($this);
        $this->semCredito = new SemCredito($this);
        $this->comCredito = new ComCredito($this);
        $this->vendido = new Vendido($this);

        $this->vencedor = new Vencedor($this);

        $this->count = $numeroDeBolinhas;
        if ($this->count > 0) {
            $this->state = $this->semCredito;
        } else {
            $this->state = $this->esgotado;
        }
    }

    public function inserirMoeda()
    {
        $this->state->inserirMoeda();
    }

    public function ejetarMoeda()
    {
        $this->state->ejetarMoeda();
    }

    public function virarManivela()
    {
        $this->state->virarManivela();
        $this->state->entregar();
    }

    /**
     * @param State $state
     */
    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function liberarBolinha()
    {
        echo "\nUma bolinha de borracha saiu da máquina...\n";

        if ($this->count !== 0) {
            $this->count -= 1;
        }
    }

    public function getCount()
    {
        return $this->count;
    }

    public function getSemCredito()
    {
        return $this->semCredito;
    }

    public function getComCredito()
    {
        return $this->comCredito;
    }

    public function getEsgotado()
    {
        return $this->esgotado;
    }

    public function getVendido()
    {
        return $this->vendido;
    }

    public function getVencedor()
    {
        return $this->vencedor;
    }

    /**
     * @param int $numeroDeBolinhas
     */
    public function recarregar(int $numeroDeBolinhas)
    {
        $this->count += $numeroDeBolinhas;
        $this->setState($this->getSemCredito());
    }
}