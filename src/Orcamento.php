<?php

namespace Assuncaovictor\DesignPattern;

use Assuncaovictor\DesignPattern\EstadosOrcamento\EmAprovacao;
use Assuncaovictor\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Orcamento implements Orcavel
{
    private array $itens;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
        $this->itens = [];
    }

    /**
     * @throws \DomainExceptions 
     */
    public function AplicaDescontoExtra(): void
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova(): void
    {
        $this->estadoAtual->aprova($this);
    }

    public function reprova(): void
    {
        $this->estadoAtual->reprova($this);
    }

    public function finaliza(): void
    {
        $this->estadoAtual->finaliza($this);
    }

    public function adicionaItem(Orcavel $item)
    {
        $this->itens[] = $item;
    }

    public function valor(): float
    {
        return array_reduce(
            $this->itens,
            fn (float $valorAcumulado, Orcavel $item) => $item->valor() + $valorAcumulado,
            //function (float $valorAcumulado, ItemOrcamento $item) {
            //    return $item->valor + $valorAcumulado;
            //},
            0
        );
    }
}
