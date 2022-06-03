<?php
include 'Produto.php';
ini_set('display_errors', 1);

$p1 = new Produto();
$p2 = new Produto();
// $p1->nome = 'Tenis para corrida';
// $p1->valor = 299;

// $p2 = new Produto();
// $p2->nome = 'Headset';
// $p2->valor = -450;

$p1->setNome('Camiseta do Barcelona');
$p1->setValor(289);
//
$p2->setNome('Camiseta do Imperial');
$p2->setValor(199);

var_dump($p1);
var_dump($p2);




