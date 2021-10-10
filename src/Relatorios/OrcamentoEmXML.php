<?php

namespace Assuncaovictor\DesignPattern\Relatorios;

use Assuncaovictor\DesignPattern\Orcamento;
use SimpleXMLElement;

class OrcamentoEmXML
{
    /**
     * Devolve um orçamento em formato XML
     */
    public function exportar(Orcamento $orcamento): string
    {
        // Cria um elemento XML
        $elementoOrcamento = new SimpleXMLElement('<orcamento/>');

        // Adiciona filhos no elemento
        $elementoOrcamento->addChild('valor', $orcamento->valor);
        $elementoOrcamento->addChild('quantidade_itens', $orcamento->quantidadeItens);

        return $elementoOrcamento->asXML();
    }
}
