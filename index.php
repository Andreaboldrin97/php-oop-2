<?php
require __DIR__ . '/classes/Products.php';
require __DIR__ . '/classes/User.php';
require __DIR__ . '/classes/Order.php';

//prova prodotti
$prodotto = new Products('corda', 10, 0, 'giochi');
var_dump($prodotto);



//prova user
$user = new User('andrea', 'boldrin', 'via san', 'aaaaaa556443', 2020);
var_dump($user);

//prova order
$order = new Order($user, TRUE, 0001);
var_dump($order);
