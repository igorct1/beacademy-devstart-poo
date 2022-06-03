<?php
declare(strict_types=1);

abstract class Validar
{
    //métodos estáticos (static)
    // torna os métodos acessíveis sem precisar instaciar a class
    // aqui neste caso, conseguimos chamar o método validarCpf
    // fora do nosso arquivo da seguinte maneira
    // Validar::validarCpf($CPFASERVALIDADO);
    public static function validarCpf(string $cpf): void 
    {
        if(strlen($cpf) !== 11){ //apenas numeros
            die('Ops, CPF invalido!');
        }
    }
}