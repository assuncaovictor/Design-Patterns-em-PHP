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
        sleep(1);
        return $this->valor;
    }
}
