<?php

use Assuncaovictor\DesignPattern\Orcamento;
use Assuncaovictor\DesignPattern\Pedido\CriadorDePedido;
use Assuncaovictor\DesignPattern\Pedido\Pedido;
use Assuncaovictor\DesignPattern\Pedido\TemplatePedido;

require_once 'vendor/autoload.php';

$pedido = [];
$criadorPedido = new CriadorDePedido();

$dados = new TemplatePedido(md5('a'), new DateTimeImmutable());
$hoje = date('Y-m-d');

for ($i = 0; $i < 10000; $i++) {
    $orcamento = new Orcamento();
    $pedido = $criadorPedido->criaPedido('Victor Assunção', $hoje, $orcamento);
    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();
