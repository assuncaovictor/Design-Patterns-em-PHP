<?php

namespace Assuncaovictor\DesignPattern\Http;

/**
 * Adapter para cliente URL implementado com reactPHP
 */
class ReactPHPHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        // instancio o reac php
        // preparo os dados
        // faço a requisição
        echo 'ReactPHP';
    }
}
