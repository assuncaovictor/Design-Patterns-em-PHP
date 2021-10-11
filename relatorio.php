<?php

use Assuncaovictor\DesignPattern\Orcamento;
use Assuncaovictor\DesignPattern\Relatorios\OrcamentoExportado;
use Assuncaovictor\DesignPattern\Relatorios\XMLExportado;
use Assuncaovictor\DesignPattern\Relatorios\ZIPExportado;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoExportadoXML = new ZIPExportado('orcamento.array');

echo $orcamentoExportadoXML->salvar($orcamentoExportado);
