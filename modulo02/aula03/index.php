<?php
include 'Produto.php';
include 'Categoria.php'; 
ini_set('display_errors', 1);

//categorias
$c1 = new Categoria('Roupas', 'Roupas Unissex');
$c2 = new Categoria('Roupas de banho', 'Toalhas, toalhas pra rosto, etc');
$c3 = new Categoria('Calçados', 'Calçados em geral');

//produtos *recebem categorias*
$p1 = new Produto('Camiseta da Imperial', 400, $c1);
$p1->setCategoria($c2); // não funciona pois a propriedade categoria é apenas readonly
// $p1->nome = 'Tenis para corrida';
// $p1->valor = 299;

// $p2 = new Produto();
// $p2->nome = 'Headset';
// $p2->valor = -450;

var_dump($p1);












