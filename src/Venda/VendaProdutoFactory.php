<?php

namespace Assuncaovictor\DesignPattern\Venda;

use Assuncaovictor\DesignPattern\Impostos\Icms;
use Assuncaovictor\DesignPattern\Impostos\Imposto;

class VendaProdutoFactory implements VendaFactory
{
    /**
     * @var int Peso do produto em gramas
     */
    private int $pesoProduto;

    public function __construct(int $pesoProduto)
    {
        $this->pesoProduto = $pesoProduto;
    }

    public function criarVenda(): Venda
    {
        return new VendaProduto(new \DateTimeImmutable(), $this->pesoProduto);
    }

    public function imposto(): Imposto
    {
        return new Icms();
    }
}
