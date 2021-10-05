<?php

use Assuncaovictor\DesignPattern\CalculadoraDeDescontos;
use Assuncaovictor\DesignPattern\CalculadoraDeImpostos;
use Assuncaovictor\DesignPattern\Impostos\Icms;
use Assuncaovictor\DesignPattern\Orcamento;

require_once "vendor/autoload.php";

/*          v0.1.0

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms);
*/

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 6;

echo $calculadora->calculaDescontos($orcamento);
