<?php

namespace Assuncaovictor\DesignPattern\EstadosOrcamento;

use Assuncaovictor\DesignPattern\Orcamento;

class Finalizado extends EstadoOrcamento
{
    protected function desconto(Orcamento $orcamento): float
    {
        throw new \DomainException('Um orçamento finalizado não pode receber desconto.');
    }
}
