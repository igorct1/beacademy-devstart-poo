<?php
declare(strict_types=1);

class GestorGeral extends Gestor
{
    private float $bonusAnual;

    public function getBonusAtual(): float 
    {
        return $this->bonusAnual;
    }
    public function setBonusAtual(float $bonusAnual): void 
    {
        $this->bonusAnual = $bonusAnual;
    }
}