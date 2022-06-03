<?php
declare(strict_types=1);

// arquivos que possuem Classes devem começar com a primeira letra maiuscula
class Aluno //classe
{
     
    private string $nome; // atributo
    private string $cpf; // atributo
    public function __construct(string $novoNome, string $novoCpf)
    {
        $this->nome = $novoNome;
        $this->cpf = $novoCpf;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome($novoNome): void
    {
        $this->nome = $novoNome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }
    public function setCpf($novoCpf): string
    {
        $this->cpf = $novoCpf;
    }
 }

