<?php
declare(strict_types=1);

class Gestor extends Usuario
{
    private string $horario;
    private float $salario;
    public function __construct(string $email, string $senha, float $salario)
    {
        parent::setEmail($email);
        parent::setSenha($senha);
        $this->salario = $salario;
    }
    public function getHorario(): string 
    {
        return $this->horario;
    }
    public function setHorario(string $horario): void 
    {
        $this->horario = $horario;
    }
    public function getSalario(): string 
    {
        return $this->salario;
    }
    public function setSalario(float $salario): void 
    {
        $this->salario = $salario;
    }
}