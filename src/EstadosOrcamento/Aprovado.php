<?php

namespace Assuncaovictor\DesignPattern\EstadosOrcamento;

use Assuncaovictor\DesignPattern\Orcamento;

class Aprovado extends EstadoOrcamento
{
    protected function desconto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    public function finaliza(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
