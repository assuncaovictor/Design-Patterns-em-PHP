<?php

namespace Assuncaovictor\DesignPattern\Venda;

use Assuncaovictor\DesignPattern\Impostos\Imposto;

interface VendaFactory
{
    public function criarVenda(): Venda;
    public function imposto(): Imposto;
}
