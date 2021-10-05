<?php

namespace Assuncaovictor\DesignPattern\Impostos;

use Assuncaovictor\DesignPattern\Orcamento;

/** 
 * Usada para implementar o padrão Strategy que reduz o número de ifs no código e o deixa mais manuseável.  
 */

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}
