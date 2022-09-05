<?php
require __DIR__ . '/classes/Products.php';

//prova prodotti
$prodotto = new products('corda', 10, 20, 'giochi');
var_dump($prodotto);
