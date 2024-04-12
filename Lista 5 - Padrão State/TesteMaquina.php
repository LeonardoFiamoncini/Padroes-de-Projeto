<?php

require_once "./MaquinaDeBolinhas.php";

$maquinaDeBolinhas = new MaquinaDeBolinhas(5);

$maquinaDeBolinhas->inserirMoeda();

$maquinaDeBolinhas->virarManivela();

$maquinaDeBolinhas->inserirMoeda();

$maquinaDeBolinhas->virarManivela();

$maquinaDeBolinhas->inserirMoeda();

$maquinaDeBolinhas->virarManivela();

$maquinaDeBolinhas->recarregar(10);