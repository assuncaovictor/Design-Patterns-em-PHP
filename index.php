<?php

use Assuncaovictor\DesignPattern\CalculadoraDeImpostos;
use Assuncaovictor\DesignPattern\Impostos\Icms;
use Assuncaovictor\DesignPattern\Orcamento;

require_once "vendor/autoload.php";

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms);
