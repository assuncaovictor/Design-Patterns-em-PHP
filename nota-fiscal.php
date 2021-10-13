<?php

use Assuncaovictor\DesignPattern\ItemOrcamento;
use Assuncaovictor\DesignPattern\NotaFiscal\ConstrutorNotaFiscalProduto;
use Assuncaovictor\DesignPattern\NotaFiscal\ConstrutorNotaFiscalServico;

require_once 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscalServico();

$notaFiscal = $builder->paraEmpresa(123456789, 'Victor Assunção, Desenvolvimento de Software')
    ->comItem(new ItemOrcamento(300))
    ->comItem(new ItemOrcamento(200))
    ->comItem(new ItemOrcamento(150))
    ->comObservacoes('Esta nota fiscal foi construída com um construtor')
    ->constroi();
echo $notaFiscal->valorSemJuros() . PHP_EOL;
echo $notaFiscal->valorComJuros();
