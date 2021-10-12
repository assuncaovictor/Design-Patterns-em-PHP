<?php

namespace Assuncaovictor\DesignPattern\Log;

abstract class LogManager
{
    public function log(string $severidade, string $mensagem): void
    {
        /**
         *  @var LogWritter $logWritter
         */
        $logWritter = $this->criarLogWritter();
        $dataHoje = date('d/m/Y');
        $mensagemFormatada = "[$dataHoje][$severidade]: $mensagem";
        $logWritter->escreveLog($mensagemFormatada);
    }

    abstract public function criarLogWritter(): LoggerWritter;
}
