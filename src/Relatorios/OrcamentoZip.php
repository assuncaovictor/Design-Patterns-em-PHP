<?php

namespace Assuncaovictor\DesignPattern\Relatorios;

use Assuncaovictor\DesignPattern\Orcamento;
use ZipArchive;

class OrcamentoZip
{
    public function exportar(Orcamento $orcamento)
    {
        // Cria um diretório temporário . Adiciona um separador de diretórios . Nome do arquivo a ser criado
        $caminhoArquivo = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'orcamento.zip';

        // cria um arquivo zip no diretório. Se ele existir apenas abre o arquivo
        $zip = new ZipArchive;
        $zip->open($caminhoArquivo, ZipArchive::CREATE);

        // A função serialize pega um objeto e representa o objeto como string
        $zip->addFromString('orcamento.serial', serialize($orcamento));

        $zip->close();
    }
}
