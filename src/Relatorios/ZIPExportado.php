<?php

namespace Assuncaovictor\DesignPattern\Relatorios;

use ZipArchive;

// representa arquivos .zip
class ZIPExportado implements ArquivoExportado
{
    private string $nomeArquivoInterno;

    public function __construct(string $nomeArquivoInterno)
    {
        $this->nomeArquivoInterno = $nomeArquivoInterno;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        // cria um arquivo temporario com a inicial 'zip'
        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'zip');

        // cria um novo arquivo zip e o insere as informações do $conteudoExportado
        $arquivoZip = new ZipArchive;
        $arquivoZip->open($caminhoArquivo);
        $arquivoZip->addFromString($this->nomeArquivoInterno, serialize($conteudoExportado->conteudo()));
        $arquivoZip->close();

        return $caminhoArquivo;
    }
}
