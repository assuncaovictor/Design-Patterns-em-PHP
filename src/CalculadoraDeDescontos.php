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
        $desconto = new DescontoMaisDe5Itens();
        $desconto->setProximo(new DescontoMaisDe500Reais)
            ->setProximo(new SemDesconto);
        $descontoCalculado = $desconto->calculaDesconto($orcamento);
        $logDesconto = new LogDesconto();
        $logDesconto->informar($descontoCalculado);

        return $descontoCalculado;
    }
}
