<?php

require_once './Bateira.php';
require_once './Canoa.php';
require_once './BarcoVela.php';

echo "\n\n\n__Bateira__\n";

$bateira = new Bateira();
$bateira->exibir();
$bateira->estaParado();
// var_dump($bateira);

echo "\n\n\n__Canoa__\n";

$canoa = new Canoa();
$canoa->exibir();
$canoa->performaMovimento();
// var_dump($canoa);

echo "\n\n\n__BarcoVela__\n";

$barcoVela = new BarcoVela();
$barcoVela->exibir();
$barcoVela->estaParado();
$barcoVela->performaMovimento();
$barcoVela->estaParado();
// var_dump($barcoVela);
