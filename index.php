<?php
require __DIR__ . '/classes/Products.php';
require __DIR__ . '/classes/User.php';
require __DIR__ . '/classes/Order.php';

//prova prodotti
$prodotto1 = new Products('corda', 10, 3, 'giochi');
$prodotto2 = new Products('palla', 10, 4, 'giochi');
$prodotto3 = new Products('osso', 10, 5, 'giochi');
var_dump($prodotto1);



//prova user
$user = new User('andrea', 'boldrin', 'via san', 'aaaaaa556443', 2020);
var_dump($user);

//prova order
$order = new Order($user, TRUE, 0001, [$prodotto1, $prodotto2, $prodotto3]);
var_dump($order);
