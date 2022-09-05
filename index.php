<?php
require __DIR__ . '/classes/Products.php';
require __DIR__ . '/classes/User.php';

//prova prodotti
$prodotto = new Products('corda', 10, 0, 'giochi');
var_dump($prodotto);



//prova user
$user = new User('andrea', 'boldrin', true, 'via san');
var_dump($user);
