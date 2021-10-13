<?php

namespace Assuncaovictor\DesignPattern;

class ItemOrcamento implements Orcavel
{
    private float $valor;

    public function __construct(float $valor)
    {
        $this->valor = $valor;
    }

    public function valor(): float
    {
        return $this->valor;
    }
}
