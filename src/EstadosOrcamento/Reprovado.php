<?php

namespace Assuncaovictor\DesignPattern\EstadosOrcamento;

use Assuncaovictor\DesignPattern\Orcamento;

class Reprovado extends EstadoOrcamento
{
    protected function desconto(Orcamento $orcamento): float
    {
        throw new \DomainException('Um orçamento reprovado não pode receber desconto.');
    }

    public function finaliza(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
