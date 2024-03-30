<?php

require_once "./Espresso.php";
require_once "./DarkRoast.php";
require_once "./Mocha.php";
require_once "./Whip.php";
require_once "./HouseBlend.php";
require_once "./Soy.php";


echo "\n\n__Starbuzz Coffee__\n\n";

$beverage = new Espresso();
printf("\n %s = $ %.2f \n",
    $beverage->getDescription(),
    $beverage->cost()
);

$beverage2 = new DarkRoast('M');
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
printf("\n %s = $ %.2f \n",
    $beverage2->getDescription(),
    $beverage2->cost()
);

$beverage3 = new HouseBlend('P');
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);
printf("\n %s = $ %.2f \n",
    $beverage3->getDescription(),
    $beverage3->cost()
);

$beverage4 = new HouseBlend('M');
$beverage4 = new Soy($beverage4);
$beverage4 = new Mocha($beverage4);
$beverage4 = new Whip($beverage4);
printf("\n %s = $ %.2f \n",
    $beverage4->getDescription(),
    $beverage4->cost()
);

$beverage5 = new HouseBlend('G');
$beverage5 = new Soy($beverage5);
$beverage5 = new Mocha($beverage5);
$beverage5 = new Whip($beverage5);
printf("\n %s = $ %.2f \n",
    $beverage5->getDescription(),
    $beverage5->cost()
);