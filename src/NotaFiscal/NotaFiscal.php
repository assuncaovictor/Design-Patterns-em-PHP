<?php

namespace Assuncaovictor\DesignPattern\NotaFiscal;

use Assuncaovictor\DesignPattern\ItemOrcamento;

class NotaFiscal
{
    public int $cnpjEmpresa;
    public string $razaoSocialEmpresa;
    public array $itens;
    public string $observacoes;
    public \DateTimeInterface $dataEmissao;
    public float $valorImpostos;

    public function valorSemJuros(): float
    {

        return array_reduce(
            $this->itens,
            fn (float $valorAcumulado, ItemOrcamento $itemAtual) => $valorAcumulado + $itemAtual->valor(),
            0
        );
    }

    public function valorComJuros(): float
    {
        $valorSemJuros = $this->valorSemJuros();
        return $valorSemJuros + $this->valorImpostos;
    }

    public function __clone()
    {
        $this->dataEmissao = new \DateTimeImmutable();
    }
}
