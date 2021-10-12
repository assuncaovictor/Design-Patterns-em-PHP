<?php

namespace Assuncaovictor\DesignPattern\Log;

class FileLogWritter implements LoggerWritter
{
    private $arquivo;

    public function __construct(string $caminhoArquivo)
    {
        $this->arquivo = fopen($caminhoArquivo, 'a+');
    }

    public function escreveLog(string $mensagemFormatada): void
    {
        fwrite($this->arquivo, $mensagemFormatada);
    }

    public function __destruct()
    {
        fclose($this->arquivo);
    }
}
