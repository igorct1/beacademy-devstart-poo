<?php
include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';
ini_set('display_errors', 1);

$aluno = ['nome'=> 'Igor', 'cpf'=> '457.403.418-17'];
$aluno2 = ['nome'=> 'Elisabete', 'cpf'=> '111.418.315-17'];
$aluno2 = ['nome'=> 'Sérgio', 'cpf'=> '211.433.215-20'];


$a1 = new Aluno(); //Instanciando um novo objeto a partir de uma "FORM
// $a1->nome = "Igor";
// $a1->cpf = '457.203.148.17';

// $cursoPHP = new Curso(); // novo Objeto ($cursoPHP);
// $cursoPHP->nome = 'Introdução ao PHP';
// $cursoPHP->cargaHoraria = 88;
// $cursoPHP->descricao = 'Escreva aqui uma descrição mais aprofundada';
// $cursoPHP->nivelTecnico = "Básico e intermédiario";
// $cursoPHP->professor = 'Alessandro Feitoza';

// var_dump($cursoPHP);