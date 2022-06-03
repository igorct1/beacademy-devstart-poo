<?php
include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';


ini_set('display_errors', 1);

//cpf
$cpf = '12345678911'; // 11 digitos
$docX = '12345678910124'; // 14 digitos (doc US)
//br
$brasil = new ValidarBR();
$brasil->validarDocumento($cpf);

//us
$us = new ValidarUS();
$us->validarDocumento($docX);

