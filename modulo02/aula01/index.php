<?php
include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';
ini_set('display_errors', 1);


// $p1 = new Professor();
// $p1->nome = 'Alessandro';
// $p1->cpf = '0891230901';
// $p1->salario = 1000;
$professorA = new Professor('Igor', '127491247912', 3000);



// $cursoJS = new Curso();
// $cursoJS->setCargaHoraria(80);
// echo $cursoJS->getCargaHoraria();
// var_dump($cursoJS);
// //var_dump
// var_dump($professorA);
// // var_dump($p1);

$cursoJS = new Curso('JavaScript Para Iniciantes',
 'Um curso voltado para quem quer aprender javascript',
 'Básico', 88);
$cursoJS->setCargaHoraria =  144;
 var_dump($cursoJS);
 var_dump($professorA);


 $professorB = new Professor("Maria", '123.123.123-14', 7000);

 var_dump($professorB);

