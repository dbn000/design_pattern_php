<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\Factory\AbstractCliente;
use DesignPattern\Creational\Factory\AbstractPedido;
use DesignPattern\Creational\Factory\AbstractRespuestaPedido;
use DesignPattern\Creational\Factory\ClienteContado;
use DesignPattern\Creational\Factory\ClienteCredito;
use DesignPattern\Creational\Factory\RespuestaPedidoContado;
use PHPUnit\Framework\TestCase;

/**
 * Class BuillderTest.
 *
 * @package DesignPattern\Creational\Builder
 */
class FactoryTest extends TestCase
{

    private const CANTIDAD_CONTADO_OK = 500;
    private const CANTIDAD_CREDITO_OK = 4000;
    private const CANTIDAD_CREDITO_KO = 60000;

    public function testAbstractCliente(): void
    {
        $clienteContado = new ClienteContado();
        $this->assertInstanceOf(AbstractCliente::class, $clienteContado);
    }

    public function testRespuestaPedidoContado(): void
    {
        $clienteContado = new ClienteContado();
        $clienteContado->nuevoPedido(self::CANTIDAD_CONTADO_OK);
        $respuestaPedido = $clienteContado->mostrarRespuestasPedido()[0] ?? null;
        $this->assertEquals($respuestaPedido->status, AbstractPedido::STATUS_PEDIDO_OK);
    }

    public function testRespuestaPedidoCreditoOk(): void
    {
        $clienteCredito = new ClienteCredito();
        $clienteCredito->nuevoPedido(self::CANTIDAD_CREDITO_OK);
        $respuestaPedido = $clienteCredito->mostrarRespuestasPedido();
        $this->assertIsArray($respuestaPedido);
        $this->assertNotEmpty($respuestaPedido);
        $this->assertEquals($respuestaPedido[0]->status, AbstractPedido::STATUS_PEDIDO_OK);
    }

    public function testRespuestaPedidoCreditoKo(): void
    {
        $clienteCredito = new ClienteCredito();
        $clienteCredito->nuevoPedido(self::CANTIDAD_CREDITO_KO);
        $respuestaPedido = $clienteCredito->mostrarRespuestasPedido();
        $this->assertIsArray($respuestaPedido);
        $this->assertEmpty($respuestaPedido);
    }
}
