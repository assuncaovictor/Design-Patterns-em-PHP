<?php

namespace Assuncaovictor\DesignPattern;

use Assuncaovictor\DesignPattern\Impostos\Imposto;

class CalculadoraDeImpostos
{
    public function calculaDesconto(Orcamento $orcamento, Imposto $nomeImposto): float
    {
        return $nomeImposto->calculaImporsto($orcamento);
    }
}
