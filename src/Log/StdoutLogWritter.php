<?php

namespace Assuncaovictor\DesignPattern\Log;

class StdoutLogWritter implements LoggerWritter
{
    public function escreveLog(string $mensagemFormatada): void
    {
        echo $mensagemFormatada;
        // fwrite(STDOUT, $mensagemFormatada . PHP_EOL);
    }
}
