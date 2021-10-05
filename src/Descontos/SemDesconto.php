<?php

namespace Assuncaovictor\DesignPattern\Descontos;

use Assuncaovictor\DesignPattern\Orcamento;

class SemDesconto extends Desconto
{
    public function __construct()
    {
        parent::__construct(null); // Reescreve o construtor da classe mãe Desconto
    }

    public function calculaDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}
