<?php

namespace Assuncaovictor\DesignPattern\Descontos;

use Assuncaovictor\DesignPattern\Orcamento;

class SemDesconto extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}
