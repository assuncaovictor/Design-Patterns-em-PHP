<?php

use Assuncaovictor\DesignPattern\CalculadoraDeDescontos;
use Assuncaovictor\DesignPattern\CalculadoraDeImpostos;
use Assuncaovictor\DesignPattern\Impostos\Icms;
use Assuncaovictor\DesignPattern\Impostos\Icpp;
use Assuncaovictor\DesignPattern\Orcamento;

require_once "vendor/autoload.php";

// criado: v0.1.0 | alterado: v0.1.2 
$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 500;

echo $calculadora->calculaDesconto($orcamento, new Icpp(new Icms()));

//criado: v0.1.1 | alterado: v0.1.1.1, v0.1.2
/*$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 7;

echo $calculadora->calculaDescontos($orcamento);*/
