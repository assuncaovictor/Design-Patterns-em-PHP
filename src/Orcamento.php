<?php

namespace Assuncaovictor\DesignPattern;

use Assuncaovictor\DesignPattern\EstadosOrcamento\EmAprovacao;
use Assuncaovictor\DesignPattern\EstadosOrcamento\EstadoOrcamento;
use DomainException;

class Orcamento
{
    public int $quantidadeItens;
    public float $valor;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
    }

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
}
