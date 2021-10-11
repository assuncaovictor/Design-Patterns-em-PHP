<?php

namespace Assuncaovictor\DesignPattern\Relatorios;

/**
 * Implementação do padrão bridge
 */
interface ArquivoExportado
{
    public function salvar(ConteudoExportado $conteudoExportado): string;
}
