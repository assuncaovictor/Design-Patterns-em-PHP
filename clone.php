<?php

use Assuncaovictor\DesignPattern\ItemOrcamento;
use Assuncaovictor\DesignPattern\NotaFiscal\ConstrutorNotaFiscalServico;
use Assuncaovictor\DesignPattern\NotaFiscal\NotaFiscal;

require_once 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscalServico();

$notaFiscal = $builder->paraEmpresa(123456789, 'Victor Assunção, Desenvolvimento de Software')
    ->comItem(new ItemOrcamento(300))
    ->comItem(new ItemOrcamento(200))
    ->comItem(new ItemOrcamento(150))
    ->comObservacoes('Esta nota fiscal foi construída com um construtor')
    ->constroi();

$notaFiscal2 = clone $notaFiscal;
$notaFiscal2->itens[] = new ItemOrcamento(10);

var_dump($notaFiscal, $notaFiscal2);
