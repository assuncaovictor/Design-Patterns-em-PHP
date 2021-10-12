<?php

use Assuncaovictor\DesignPattern\Log\FileLogManager;
use Assuncaovictor\DesignPattern\Log\StdoutLogManager;

require_once 'vendor/autoload.php';

$logManager = new FileLogManager(__DIR__ . '/src/Log/log.txt');
$logManager->log('info', 'Testando log manager' . PHP_EOL);
