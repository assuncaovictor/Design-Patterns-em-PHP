<?php

use Assuncaovictor\DesignPattern\PdoConnection;

require_once 'vendor/autoload.php';

/** @var \PDO */
$pdo = PdoConnection::getInstance('sqlite::memory:');

$pdo2 = PdoConnection::getInstance('sqlite::memory:');

var_dump($pdo, $pdo2);
