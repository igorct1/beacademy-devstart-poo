<?php
ini_set('display_errors', 1);
include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';
include 'ClienteVip.php';
include 'Validar.php';
//teste usuario
// $u1 = new Usuario(); // não pode iniciar uma classe Abstrata.

//cliente
$c1 = new Cliente('igorct77@gmail.com', 'teste');
$c1->setNome("Igor");
$c1->setDataCadastro('01/02/2015');
//validarCpf
$cpf = '12345678911';
Validar::validarCpf($cpf);
$c1->setCpf($cpf);

//gestor
$g1 = new Gestor('igorct77@gmail.com', 'teste', 5000);


//gestorGeral
$gg1 = new GestorGeral('rsnnxD@hotmail.com', '123456', 6000);

//clientevip
// não é possível extender uma classe final
// *final Class
// $cv = new ClienteVip('cliente@email.com', '12341234'); 

var_dump($c1);
var_dump($g1);
var_dump($gg1);
// var_dump($cv)






