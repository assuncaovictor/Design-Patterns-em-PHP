<?php

namespace Assuncaovictor\DesignPattern\Pedido;

use Assuncaovictor\DesignPattern\Orcamento;

class CriadorDePedido
{
    private array $templates;

    public function __construct()
    {
        $this->templates = [];
    }

    public function criaPedido(string $nomeCliente, string $dataFormatada, Orcamento $orcamento): Pedido
    {
        $pedido = new Pedido();
        $pedido->template = $this->gerarTemplatePedido($nomeCliente, $dataFormatada);
        $pedido->orcamento = $orcamento;

        return $pedido;
    }

    public function gerarTemplatePedido(string $nomeCliente, string $dataFormatada)
    {
        $hash = md5($nomeCliente . $dataFormatada);
        if (!array_key_exists($hash, $this->templates)) {
            $template = new TemplatePedido($nomeCliente, new \DateTimeImmutable($dataFormatada));
            $this->templates[$hash] = $template;
        }
        return $this->templates[$hash];
    }
}
