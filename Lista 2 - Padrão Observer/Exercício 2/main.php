<?php

require_once "./User.php";
require_once "./Notifier.php";
require_once "./Store.php";

$notifier = new Notifier();
$store = new Store($notifier);

$user1 = new User("Leonard", $notifier);
$user2 = new User("Paul", $notifier);

$store->registerObserver($user1);
$store->registerObserver($user2);

$product1 = [
    "name" => "Book"
];

$store->setProduct($product1);
$store->setPrice($product1, 19.90);

$product2 = [
    "name" => "Pencil",
    "price" => 5.99
];
$store->setProduct($product2);
