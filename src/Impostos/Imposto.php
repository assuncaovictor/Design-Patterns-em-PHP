<?php

namespace Assuncaovictor\DesignPattern\Impostos;

use Assuncaovictor\DesignPattern\Orcamento;

/** 
 * Usada para implementar o padrão Strategy que reduz o número de ifs no código e o deixa mais manuseável.  
 */

abstract class Imposto
{
    protected ?Imposto $outroImposto;

    public function __construct(?Imposto $outroImposto = null)
    {
        $this->outroImposto = $outroImposto;
    }

    abstract protected function realizaCalculoEspecifico(Orcamento $orcamento): float;

    public function calculaImporsto(Orcamento $orcamento)
    {
        return $this->realizaCalculoEspecifico($orcamento) +
            $this->realizaCalculoDeOutroImposto($orcamento);
    }

    protected function realizaCalculoDeOutroImposto(Orcamento $orcamento): float
    {
        return is_null($this->outroImposto) ? 0 : $this->outroImposto->calculaImporsto($orcamento);
    }
}
