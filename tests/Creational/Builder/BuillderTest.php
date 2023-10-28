<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\Builder\AbstractVehicleDocumentBuilder;
use DesignPattern\Creational\Builder\AbstractBuilder;
use DesignPattern\Creational\Builder\HtmlDocumentBuilder;
use DesignPattern\Creational\Builder\HtmlBuilder;
use DesignPattern\Creational\Builder\PdfBuilder;
use DesignPattern\Creational\Builder\PdfDocumentBuilder;
use DesignPattern\Creational\Builder\Seller;
use PHPUnit\Framework\TestCase;

/**
 * Class BuillderTest.
 *
 * @package DesignPattern\Creational\Builder
 */
class BuillderTest extends TestCase
{

    private string $name = 'ValidName';
    private string $documentText = 'Valid document text to print. Enjoy!';
    private array $methodSellerList = [
        'genera'
    ];
    private array $methodAbstractDocumentList = [
        'agregaDocumento',
        'imprime'
    ];
    private array $methodAbstractDocumentBuilderList = [
        'generaFormularioPedido',
        'generaSolicitudMatriculacion'
    ];

    public function testDocumentationHtml(): void
    {
        $documentation = new HtmlBuilder();
        $this->assertInstanceOf(AbstractBuilder::class, $documentation);
        foreach ($this->methodAbstractDocumentList as $methodAbstractDocument) {
            $this->assertTrue(method_exists($documentation,$methodAbstractDocument));
        }
    }

    public function testDocumentationPdf(): void
    {
        $documentation = new PdfBuilder();
        $this->assertInstanceOf(AbstractBuilder::class, $documentation);
    }

    public function testDocumentationHtmlBuilder()
    {
        $constructorDocumentationHtml = new HtmlDocumentBuilder();
        $this->assertInstanceOf(AbstractVehicleDocumentBuilder::class, $constructorDocumentationHtml);

        foreach ($this->methodAbstractDocumentBuilderList as $method) {
            $this->assertTrue(method_exists($constructorDocumentationHtml,$method));
        }
    }

    public function testDocumentationPdfBuilder()
    {
        $constructorDocumentationPdf = new PdfDocumentBuilder();
        $this->assertInstanceOf(AbstractVehicleDocumentBuilder::class, $constructorDocumentationPdf);

        foreach ($this->methodAbstractDocumentBuilderList as $method) {
            $this->assertTrue(method_exists($constructorDocumentationPdf,$method));
        }
    }

    public function testSeller()
    {
        $seller = new Seller(new HtmlDocumentBuilder());
        foreach ($this->methodSellerList as $methodSeller) {
            $this->assertTrue(method_exists($seller,$methodSeller));
        }
        $seller = new Seller(new PdfDocumentBuilder());
        foreach ($this->methodSellerList as $methodSeller) {
            $this->assertTrue(method_exists($seller,$methodSeller));
        }
    }

}
