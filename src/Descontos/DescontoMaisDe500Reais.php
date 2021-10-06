<?php

namespace Assuncaovictor\DesignPattern\Descontos;

use Assuncaovictor\DesignPattern\Orcamento;

final class DescontoMaisDe500Reais extends VerificaDesconto
{
    protected function conficaoDoDesconto(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }

    protected function valorDesconto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.05;
    }
}
