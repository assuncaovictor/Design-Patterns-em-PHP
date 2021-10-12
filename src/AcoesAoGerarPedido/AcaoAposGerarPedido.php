<?php

namespace Assuncaovictor\DesignPattern\AcoesAoGerarPedido;

use Assuncaovictor\DesignPattern\Pedido\Pedido;

interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}
