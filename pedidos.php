<?php

use Assuncaovictor\DesignPattern\DadosExtrinsecosPedido;
use Assuncaovictor\DesignPattern\Orcamento;
use Assuncaovictor\DesignPattern\Pedido;

require_once 'vendor/autoload.php';

$pedido = [];

$dados = new DadosExtrinsecosPedido(md5('a'), new DateTimeImmutable());

for ($i = 0; $i < 10000; $i++) {
    $pedido = new Pedido();
    $pedido->dados = $dados;
    $pedido->orcamento = new Orcamento();

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();
