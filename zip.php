<?php

use Assuncaovictor\DesignPattern\Orcamento;
use Assuncaovictor\DesignPattern\Relatorios\OrcamentoZip;

require 'vendor/autoload.php';

$orcamentoZip = new OrcamentoZip();
$orcamento = new Orcamento();

$orcamento->valor = 500;
$orcamento->quantidadeItens = 3;


$orcamentoZip->exportar($orcamento);
