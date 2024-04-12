<?php

interface State
{
    public function inserirMoeda();

    public function ejetarMoeda();

    public function virarManivela();

    public function entregar();
}