<?php

use Assuncaovictor\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Assuncaovictor\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Assuncaovictor\DesignPattern\AcoesAoGerarPedido\GerarLog;
use Assuncaovictor\DesignPattern\GerarPedido;
use Assuncaovictor\DesignPattern\GerarPedidoHandler;

require_once "vendor/autoload.php";

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();

$gerarPedidoHandler->adicionaAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionaAcaoAoGerarPedido(new EnviarPedidoPorEmail());
$gerarPedidoHandler->adicionaAcaoAoGerarPedido(new GerarLog());

$gerarPedidoHandler->execute($gerarPedido);
