<?php

require_once './MallardDuck.php';
require_once './RedheadDuck.php';
require_once './RubberDuck.php';
require_once './DecoyDuck.php';

echo "\n\n\n__MallardDuck__\n";

$mallardDuck = new MallardDuck();
$mallardDuck->display();
$mallardDuck->performFly();
// var_dump($mallardDuck);

echo "\n\n\n__RedheadDuck__\n";

$redheadDuck = new RedheadDuck();
$redheadDuck->display();
$redheadDuck->performFly();
// var_dump($redheadDuck);

echo "\n\n\n__RubberDuck__\n";

$rubberDuck = new RubberDuck();
$rubberDuck->display();
$rubberDuck->performFly();
$rubberDuck->performQuack();
// var_dump($rubberDuck);

echo "\n\n\n__DecoyDuck__\n";

$decoyDuck = new DecoyDuck();
$decoyDuck->display();
$decoyDuck->performFly();
$decoyDuck->performQuack();
// var_dump($decoyDuck);