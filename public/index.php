<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Core\Teste;

// Teste::class;

$teste = new Teste();

var_dump($teste->exibirMensagem());
phpinfo();
