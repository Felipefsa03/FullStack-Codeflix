<?php

namespace Tests\Unit;

// require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Core\Teste;

class TesteUnitTest extends TestCase
{
    public function test_exibir_mensagem()
    {
        $teste = new Teste();
        $response = $teste->exibirMensagem();

        $this->assertEquals("Olá!", $response);

        
    }
}