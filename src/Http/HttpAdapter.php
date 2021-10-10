<?php

namespace Assuncaovictor\DesignPattern\Http;

/**
 * Interface genêrica para a implementação do padrão adpter
 */
interface HttpAdapter
{
    public function post(string $url, array $data = []): void;
}
