<?php

namespace Assuncaovictor\DesignPattern;

use Assuncaovictor\DesignPattern\Descontos\DescontoMaisDe500Reais;
use Assuncaovictor\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Assuncaovictor\DesignPattern\Descontos\SemDesconto;

/**
 * Aplica o padrão chain of responsability ou cadeia de responsabilidades.
 * Uma cadeia de pedidos que retorna algum valor quando a condição for atendida
 */

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
