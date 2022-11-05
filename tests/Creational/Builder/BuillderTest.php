<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\Builder\AbstractConstructorDocumentacionVehiculo;
use DesignPattern\Creational\Builder\AbstractDocumentacion;
use DesignPattern\Creational\Builder\ConstructorDocumentacionHtml;
use DesignPattern\Creational\Builder\DocumentacionHtml;
use DesignPattern\Creational\Builder\DocumentacionPdf;
use DesignPattern\Creational\Builder\Vendedor;
use PHPUnit\Framework\TestCase;

/**
 * Class BuillderTest.
 *
 * @package DesignPattern\Creational\Builder
 */
class BuillderTest extends TestCase
{
    public function testDocumentationHtml(): void
    {
        $documentacion = new DocumentacionHtml();
        $this->assertInstanceOf(AbstractDocumentacion::class, $documentacion);
    }
    public function testDocumentationPdf(): void
    {
        $documentacion = new DocumentacionPdf();
        $this->assertInstanceOf(AbstractDocumentacion::class, $documentacion);
    }

    public function testConstructorDocumentacionHtml()
    {
        $constructorDocumentacionHtml = new ConstructorDocumentacionHtml();
        $this->assertInstanceOf(AbstractConstructorDocumentacionVehiculo::class, $constructorDocumentacionHtml);
    }

    public function testVendedor()
    {
        $vendedor = new Vendedor(new ConstructorDocumentacionHtml());
        $this->assertTrue(method_exists($vendedor, 'genera'));
    }

}
