<?php

namespace Assuncaovictor\DesignPattern\Relatorios;

use Assuncaovictor\DesignPattern\Pedido;

class PedidoExportado implements ConteudoExportado
{
    private Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    /**
     * returna array associativo
     */
    public function conteudo(): array
    {
        return [
            'data_finalizacao' => $this->pedido->dataFinalizacao->format('d/m/Y'),
            'nome_cliente' => $this->pedido->nomeCliente
        ];
    }
}
