<?php
declare(strict_types=1);

class Curso
{
    private string $nome;
    private string $descricao;
    private string $nivelTecnico;
    private int $cargaHoraria;

    public function __construct(string $novoNome, string $novaDescricao, string $nivelTecnico, int $novaCargaHoraria)
        
    {
        $this->nome = $novoNome;
        $this->descricao = $novaDescricao;
        $this->nivelTecnico = $novoNome;
        $this->cargaHoraria = $novaCargaHoraria;

    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function setNome($novoNome): void
    {
        $this->nome = $novoNome;
    }
    public function getDescricao(): string
    {
        return $this->descricao;
    }
    public function setDescricao($novaDescricao): void 
    {
        $this->descricao = $novaDescricao;
    }
    public function getNivelTecnico(): string
    {
        return $this->nivelTecnico;
    }
    public function setNivelTecnico($nivel): void 
    {
        $this->nivelTecnico = $nivel;
    }

    public function getCargaHoraria(): int
    {
        return $this->cargaHoraria;
    }
    public function setCargaHoraria($novaCarga): void 
    {
        $this->cargaHoraria = $novaCarga;
    }

    
}