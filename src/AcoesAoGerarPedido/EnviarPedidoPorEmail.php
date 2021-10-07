<?php

namespace Assuncaovictor\DesignPattern\AcoesAoGerarPedido;

use Assuncaovictor\DesignPattern\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Enviando e-mail de pedido gerado" . PHP_EOL;
    }
}
