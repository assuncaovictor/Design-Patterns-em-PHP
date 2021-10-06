<?php

namespace Assuncaovictor\DesignPattern\Descontos;

use Assuncaovictor\DesignPattern\Orcamento;

final class DescontoMaisDe5Itens extends VerificaDesconto
{
    protected function conficaoDoDesconto(Orcamento $orcamento): bool
    {
        return $orcamento->quantidadeItens > 5;
    }

    protected function valorDesconto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}
