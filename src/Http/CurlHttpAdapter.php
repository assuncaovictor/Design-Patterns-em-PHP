<?php

namespace Assuncaovictor\DesignPattern\Http;

/**
 * Adapter para cliente URL implementado com curl
 */
class CurlHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, $data);

        curl_exec($curl);
    }
}
