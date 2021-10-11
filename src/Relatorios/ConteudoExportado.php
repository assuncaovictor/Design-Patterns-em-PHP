<?php

namespace Assuncaovictor\DesignPattern\Relatorios;

/**
 * Abstração do conteúdo a ser exportado
 */
interface ConteudoExportado
{
    public function conteudo(): array;
}
