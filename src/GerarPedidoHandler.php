<?php

namespace Assuncaovictor\DesignPattern;

class GerarPedidoHandler implements Comando
{
    public function execute(GerarPedido $gerarPedido): void
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        echo "Cria pedido no banco de dados" . PHP_EOL;
        echo "Envia e-mail para cliente" . PHP_EOL;
    }
}
