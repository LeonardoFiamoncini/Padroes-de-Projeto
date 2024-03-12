<?php

require_once './MallardDuck.php';
require_once './RedheadDuck.php';
require_once './RubberDuck.php';
require_once './DecoyDuck.php';

$mallardDuck = new MallardDuck();
$mallardDuck->display();
$mallardDuck->fly();
$mallardDuck->quack();

$redheadDuck = new RedheadDuck();
$redheadDuck->display();
$redheadDuck->fly();
$redheadDuck->quack();

$rubberDuck = new RubberDuck();
$rubberDuck->display();
$rubberDuck->fly();
$rubberDuck->quack();

$decoyDuck = new DecoyDuck();
$decoyDuck->display();
$decoyDuck->fly();
$decoyDuck->quack();