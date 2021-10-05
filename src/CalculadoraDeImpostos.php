<?php

namespace Assuncaovictor\DesignPattern;

use Assuncaovictor\DesignPattern\Impostos\Imposto;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $nomeImposto): float
    {
        return $nomeImposto->calculaImposto($orcamento);
    }
}
