<?php

require_once './MovimentacaoStrategy.php';

abstract class Barco
{

    /**
     * boolean $parado
     */
    protected $parado = true;

    /**
     * boolean $emMovimento
     */
    protected $emMovimento = false;

    /**
     * MovimentacaoStrategy
     */
    protected $movimento;

    public function setMovimento(MovimentacaoStrategy $ms)
    {
        $this->movimento = $ms;
    }

    public function performaMovimento()
    {
        $this->movimento->movimentar();
        $this->parado = false;
        $this->emMovimento = true;
    }

    public function parar()
    {
        if ($this->parado) {
            echo "\nO barco já está parado!\n";
        } else {
            $this->parado = true;
            echo "\nO barco parou...\n";
        }
    }

    public function estaParado()
    {
        echo ($this->parado) ? "\nO barco está parado...\n" : "\nO barco não está parado!\n";
    }

    public function setParado(bool $parado)
    {
        $this->parado = (bool)$parado;
    }

    public function getParado()
    {
        return $this->parado;
    }
}