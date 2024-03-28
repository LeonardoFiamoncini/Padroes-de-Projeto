<?php

require_once './Apartamento.php';
require_once './Casa.php';
require_once './Terreno.php';


/**
 * Apartamento na Região A de 200m² com 6 cômodos.
 *
 * R$ 3.000,00 (valor do m²) x 200 (m²) = R$ 600.000,00
 *                    + R$ 1.000,00 x 6 =  R$ 6.000,00 (total de cômodos)
 *
 * Totalizando o valor do imóvel em R$ 606.000,00.
 */
echo "\n\n\n__Apartamento__\n";
$apartamento = new Apartamento('a', 200, 6);
$apartamento->getValorComportamento();


/**
 * Casa na Região B de 500m² com 9 cômodos.
 *
 * R$ 1.000,00 (valor do m²) x 500 (m²) = R$ 500.000,00
 *                    + R$ 1.000,00 x 9 =  R$ 9.000,00 (total de cômodos)
 *
 * Totalizando o valor do imóvel em R$ 509.000,00.
 */
echo "\n\n\n__Casa__\n";
$casa = new Casa('B', 500, 9);
$casa->getValorComportamento();


/**
 * Terreno na Região C de 1000m².
 *
 * R$ 200,00 (valor do m²) x 1000 (m²) = R$ 200.000,00
 *
 * Totalizando o valor do imóvel em R$ 200.000,00.
 */
echo "\n\n\n__Terreno__\n";
$terreno = new Terreno('c', 1000);
$terreno->getValorComportamento();