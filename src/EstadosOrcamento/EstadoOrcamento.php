<?php

namespace Assuncaovictor\DesignPattern\EstadosOrcamento;

use Assuncaovictor\DesignPattern\Orcamento;

abstract class EstadoOrcamento
{
    final public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $this->desconto($orcamento);
    }

    /**
     * @throws \DomainException
     */
    abstract protected function desconto(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento): void
    {
        throw new \DomainException('Esse orçamento não pode ser aprovado');
    }

    public function reprova(Orcamento $orcamento): void
    {
        throw new \DomainException('Esse orçamento não pode ser reprovado');
    }

    public function finaliza(Orcamento $orcamento): void
    {
        throw new \DomainException('Esse orçamento não pode ser aprovado');
    }
}
