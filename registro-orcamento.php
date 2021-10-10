<?php

use Assuncaovictor\DesignPattern\Http\CurlHttpAdapter;
use Assuncaovictor\DesignPattern\Orcamento;
use Assuncaovictor\DesignPattern\RegistroOrcamento;

require "vendor/autoload.php";

// $registroOrcamento = new RegistroOrcamento(new ReactPHPHttpAdapter());
$registroOrcamento = new RegistroOrcamento(new CurlHttpAdapter());
$registroOrcamento->registrar(new Orcamento());
