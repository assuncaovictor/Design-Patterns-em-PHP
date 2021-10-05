<?php

namespace Assuncaovictor\DesignPattern\Descontos;

use Assuncaovictor\DesignPattern\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function setProximo(?Desconto $proximoDesconto): ?Desconto
    {
        $this->proximoDesconto = $proximoDesconto; // O desconto pode ser null ou receber um objeto do tipo Desconto
        return $proximoDesconto;
    }

    public function calculaDesconto(Orcamento $orcamento): ?float
    {
        if ($this->proximoDesconto) {
            return $this->proximoDesconto->calculaDesconto($orcamento);
        }

        return null;
    }
}
