<?php

namespace Assuncaovictor\DesignPattern;

use ArrayIterator;
use IteratorAggregate;

class ListaOrcamentos implements IteratorAggregate
{
    /** @var Orcamento[] */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function adicionaOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->orcamentos);
    }
}
