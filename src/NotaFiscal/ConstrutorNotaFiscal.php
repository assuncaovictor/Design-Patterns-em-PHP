<?php

namespace Assuncaovictor\DesignPattern\NotaFiscal;

use Assuncaovictor\DesignPattern\ItemOrcamento;

abstract class ConstrutorNotaFiscal
{
    protected NotaFiscal $notaFiscal;

    public function __construct()
    {
        $this->notaFiscal = new NotaFiscal();
        $this->notaFiscal->dataEmissao = new \DateTimeImmutable();
    }

    public function paraEmpresa(int $cnpj, string $razaoSocial): ConstrutorNotaFiscal
    {
        $this->notaFiscal->cnpjEmpresa = $cnpj;
        $this->notaFiscal->razaoSocialEmpresa = $razaoSocial;

        return $this;
    }

    public function comItem(ItemOrcamento $item): ConstrutorNotaFiscal
    {
        $this->notaFiscal->itens[] = $item;

        return $this;
    }

    public function comObservacoes(string $observacoes): ConstrutorNotaFiscal
    {
        $this->notaFiscal->observacoes = $observacoes;

        return $this;
    }

    public function comDataEmissao(\DateTimeInterface $dataEmisao): ConstrutorNotaFiscal
    {
        $this->notaFiscal->dataEmissao = $dataEmisao;

        return $this;
    }

    abstract public function constroi(): NotaFiscal;
}
