<?php

namespace Assuncaovictor\DesignPattern;

class LogDesconto
{
    public function informar(float $descontoCalculado): void
    {
        // biblioteca de log
        echo "Salvando log de desconto: $descontoCalculado";
    }
}
