<?php

namespace Assuncaovictor\DesignPattern\AcoesAoGerarPedido;

use Assuncaovictor\DesignPattern\Pedido\Pedido;

class GerarLog implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log do pedido" . PHP_EOL;
    }
}
