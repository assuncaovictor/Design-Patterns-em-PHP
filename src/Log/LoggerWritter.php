<?php

namespace Assuncaovictor\DesignPattern\Log;

interface LoggerWritter
{
    public function escreveLog(string $mensagemFormatada): void;
}
