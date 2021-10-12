<?php

namespace Assuncaovictor\DesignPattern;

class CacheOrcamentoProxy implements Orcavel
{
    private Orcamento $orcamento;
    private float $valorCache;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
        $this->valorCache = 0;
    }

    public function valor(): float
    {
        if ($this->valorCache == 0) {
            $this->valorCache = $this->orcamento->valor();
        }

        return $this->valorCache;
    }
}
