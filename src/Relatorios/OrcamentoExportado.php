<?php

namespace Assuncaovictor\DesignPattern\Relatorios;

use Assuncaovictor\DesignPattern\Orcamento;

class OrcamentoExportado implements ConteudoExportado
{
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    /**
     * returna array associativo
     */
    public function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->valor,
            'quantidade_itens' => $this->orcamento->quantidadeItens
        ];
    }
}
