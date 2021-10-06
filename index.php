<?php

use Assuncaovictor\DesignPattern\CalculadoraDeDescontos;
use Assuncaovictor\DesignPattern\CalculadoraDeImpostos;
use Assuncaovictor\DesignPattern\Impostos\Icms;
use Assuncaovictor\DesignPattern\Impostos\Icpp;
use Assuncaovictor\DesignPattern\Orcamento;

require_once "vendor/autoload.php";

// v0.1.0 - v0.1.2 

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 500;

echo $calculadora->calculaDesconto($orcamento, new Icpp()) . PHP_EOL . PHP_EOL;


$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 7;

echo $calculadora->calculaDescontos($orcamento) . PHP_EOL . PHP_EOL;
