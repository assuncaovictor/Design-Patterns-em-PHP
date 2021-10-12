<?php

use Assuncaovictor\DesignPattern\ItemOrcamento;
use Assuncaovictor\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$item1 = new ItemOrcamento(300);
$item2 = new ItemOrcamento(500);

$orcamento->adicionaItem($item1);
$orcamento->adicionaItem($item2);

$orcamentoAntigo = new Orcamento();
$item3 = new ItemOrcamento(300);

$orcamentoAntigo->adicionaItem($item3);

$OrcamentoMuitoAntigo = new Orcamento();
$item4 = new ItemOrcamento(10);
$item5 = new ItemOrcamento(25.32);
$item6 = new ItemOrcamento(70.20);
$orcamentoAntigo->adicionaItem($item4);
$orcamentoAntigo->adicionaItem($item5);
$orcamentoAntigo->adicionaItem($item6);

$orcamentoAntigo->adicionaItem($OrcamentoMuitoAntigo);

$orcamento->adicionaItem($orcamentoAntigo);

echo $orcamento->valor();
