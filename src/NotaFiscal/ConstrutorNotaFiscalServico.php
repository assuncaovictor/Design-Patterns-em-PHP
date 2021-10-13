<?php

namespace Assuncaovictor\DesignPattern\NotaFiscal;

use Assuncaovictor\DesignPattern\Impostos\Icms;

class ConstrutorNotaFiscalServico extends ConstrutorNotaFiscal
{
    public function constroi(): NotaFiscal
    {
        $valorNotaFiscal = $this->notaFiscal->valorSemJuros();
        $this->notaFiscal->valorImpostos = $valorNotaFiscal * 0.06;

        return $this->notaFiscal;
    }
}
