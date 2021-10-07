<?php

namespace Assuncaovictor\DesignPattern;

interface Comando
{
    public function execute(GerarPedido $gerarPedido): void;
}
