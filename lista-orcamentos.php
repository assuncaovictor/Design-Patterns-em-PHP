<?php

require_once "vendor/autoload.php";

use Assuncaovictor\DesignPattern\ListaOrcamentos;
use Assuncaovictor\DesignPattern\Orcamento;

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 7;
$orcamento1->aprova();
$orcamento1->valor = 1500.75;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 3;
$orcamento2->reprova();
$orcamento2->valor = 150;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 5;
$orcamento3->aprova();
$orcamento3->finaliza();
$orcamento3->valor = 1350.27;

$listaOrcamentos = new ListaOrcamentos();
$listaOrcamentos->adicionaOrcamento($orcamento1);
$listaOrcamentos->adicionaOrcamento($orcamento2);
$listaOrcamentos->adicionaOrcamento($orcamento3);

foreach ($listaOrcamentos as $orcamento) {
    echo "valor: " . $orcamento->valor . PHP_EOL;
    echo "Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo "Quantidade de Itens: " . $orcamento->quantidadeItens . PHP_EOL . PHP_EOL;
}
