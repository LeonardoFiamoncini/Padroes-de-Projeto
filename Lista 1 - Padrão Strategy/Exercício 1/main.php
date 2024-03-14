<?php

require_once './MallardDuck.php';
require_once './RedheadDuck.php';
require_once './RubberDuck.php';
require_once './DecoyDuck.php';

echo "\n\n\n__MallardDuck__\n";

$mallardDuck = new MallardDuck();
$mallardDuck->swim();
$mallardDuck->performFly();
$mallardDuck->display();


echo "\n\n\n__RedheadDuck__\n";

$redheadDuck = new RedheadDuck();
$redheadDuck->swim();
$redheadDuck->performFly();
$redheadDuck->display();


echo "\n\n\n__RubberDuck__\n";

$rubberDuck = new RubberDuck();
$rubberDuck->swim();
$rubberDuck->performFly();
$rubberDuck->performQuack();
$rubberDuck->display();


echo "\n\n\n__DecoyDuck__\n";

$decoyDuck = new DecoyDuck();
$decoyDuck->swim();
$decoyDuck->performFly();
$decoyDuck->performQuack();
$decoyDuck->display();