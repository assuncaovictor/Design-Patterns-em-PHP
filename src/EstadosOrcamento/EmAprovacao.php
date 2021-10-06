<?php

namespace Assuncaovictor\DesignPattern\EstadosOrcamento;

use Assuncaovictor\DesignPattern\Orcamento;

class EmAprovacao extends EstadoOrcamento
{
    protected function desconto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.05;
    }

    public function aprova(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Aprovado();
    }

    public function reprova(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Reprovado();
    }
}
