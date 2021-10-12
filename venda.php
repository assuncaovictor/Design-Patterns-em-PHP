<?php

use Assuncaovictor\DesignPattern\Venda\VendaProdutoFactory;
use Assuncaovictor\DesignPattern\Venda\VendaServicoFactory;

require_once 'vendor/autoload.php';

$fabricaVenda = new VendaProdutoFactory(300);
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();

// $fabricaVenda = new VendaServicoFactory('Victor Assunção');
// $venda = $fabricaVenda->criarVenda();
// $imposto = $fabricaVenda->imposto();

var_dump($venda, $imposto);
