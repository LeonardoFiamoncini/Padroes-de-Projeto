<?php

require_once './DefinirValorComportamento.php';

abstract class Imovel {

    /**
     * int $comodos
     */
    protected $comodos;

    /**
     * float $espaco
     */
    protected $espaco;

    /**
     * char $localizacao
     */
    protected $localizacao;

    /**
     * DefinirValorComportamento
     */
    protected $comportamentoValor;


    public function __construct(char $localizacao, float $espaco, int $comodos) {
        $this->localizacao = $localizacao;
        $this->espaco = $espaco;
        $this->comodos = $comodos;
    }

    public function setValorComportamento(DefinirValorComportamento $comportamento) {
        $this->comportamentoValor = $comportamento;
    }

    public function getValorComportamento() {
        $this->comportamentoValor->definirValor($this->localizacao, $this->espaco, $this->comodos ?? null);
    }

    public function setLocalizacao(char $localizacao) {
        $this->localizacao = $localizacao;
    }
    
    public function getLocalizacao() {
        return $this->localizacao;
    }
    
    public function setEspaco(float $espaco) {
        $this->espaco = $espaco;
    }
    
    public function getEspaco() {
        return $this->espaco;
    }
    
    public function setComodos(int $comodos) {
        $this->comodos = $comodos;
    }
    
    public function getComodos() {
        return $this->comodos;
    }
}