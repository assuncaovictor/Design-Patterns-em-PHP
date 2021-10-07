<?php

namespace Assuncaovictor\DesignPattern;

use Assuncaovictor\DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Assuncaovictor\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Assuncaovictor\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Assuncaovictor\DesignPattern\AcoesAoGerarPedido\GerarLog;

/**
 * Aplica o padrão command e sua implementação na web, o command handler
 */
class GerarPedidoHandler implements Comando
{
    /** 
     * Implemetação do padrão observer junto ao padrão command handle
     * @var AcaoAposGerarPedido[] 
     * */
    private array $acoesAposGerarPedido = [];

    public function __construct(/* PedidoRepository, MailService */)
    {
    }

    public function adicionaAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido): void
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}
