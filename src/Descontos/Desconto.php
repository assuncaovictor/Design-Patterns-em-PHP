<?php

namespace Assuncaovictor\DesignPattern\Descontos;

use Assuncaovictor\DesignPattern\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto; // O desconto pode ser null ou receber um objeto do tipo Desconto
    }

    abstract public function calculaDesconto(Orcamento $orcamento): float;
}
