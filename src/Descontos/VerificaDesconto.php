<?php

namespace Assuncaovictor\DesignPattern\Descontos;

use Assuncaovictor\DesignPattern\Orcamento;

abstract class VerificaDesconto extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($this->conficaoDoDesconto($orcamento)) {
            return $this->valorDesconto($orcamento);
        }

        return parent::calculaDesconto($orcamento);
    }

    abstract protected function conficaoDoDesconto(Orcamento $orcamento): bool;
    abstract protected function valorDesconto(Orcamento $orcamento): float;
}
