<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Creational;

use DesignPattern\Creational\Builder\AbstractVehicleDocumentBuilder;
use DesignPattern\Creational\Builder\AbstractDocumentGeneratorBuilder;
use DesignPattern\Creational\Builder\HtmlDocumentBuilder;
use DesignPattern\Creational\Builder\HtmlDocumentGeneratorBuilder;
use DesignPattern\Creational\Builder\PdfDocumentGeneratorBuilder;
use DesignPattern\Creational\Builder\PdfDocumentBuilder;
use DesignPattern\Creational\Builder\Seller;
use PHPUnit\Framework\TestCase;

/**
 * Class BuillderTest.
 *
 * @package DesignPattern\Creational\Builder
 */
class BuilderTest extends TestCase
{

    private string $htmlDocument = '<html> HTML DOCUMENT </html>';
    private string $pdfDocument = '<Pdf> PDF DOCUMENT </Pdf>';
    private string $documentText = 'Valid document text to print. Enjoy!';

    private int $docNumber = 3;
    private array $methodSellerList = [
        'genera'
    ];
    private array $methodAbstractDocumentList = [
        'addDocument',
        'print'
    ];
    private array $methodAbstractDocumentBuilderList = [
        'generateOrderForm',
        'generateLicensePlateRequest'
    ];

    public function testHtmlDocumentGenerator(): void
    {
        $documentGenerator = new HtmlDocumentGeneratorBuilder();
        $this->assertInstanceOf(AbstractDocumentGeneratorBuilder::class, $documentGenerator);
        foreach ($this->methodAbstractDocumentList as $methodAbstractDocument) {
            $this->assertTrue(method_exists($documentGenerator, $methodAbstractDocument));
        }

        for ($i = 1; $i <= $this->docNumber; $i++) {
            $documentGenerator->addDocument($this->htmlDocument);
        }

        $this->assertEquals($this->docNumber, $documentGenerator->countDocuments());

    }

    public function testPdfDocumentGenerator(): void
    {
        $pdfDocGenerator = new PdfDocumentGeneratorBuilder();
        $this->assertInstanceOf(AbstractDocumentGeneratorBuilder::class, $pdfDocGenerator);

        for ($i = 1; $i <= $this->docNumber; $i++) {
            $pdfDocGenerator->addDocument($this->pdfDocument);
        }

        $this->assertEquals($this->docNumber, $pdfDocGenerator->countDocuments());
    }

    public function testDocumentationHtmlBuilder()
    {
        $htmlDocBuilder = new HtmlDocumentBuilder();
        $this->assertInstanceOf(AbstractVehicleDocumentBuilder::class, $htmlDocBuilder);

        foreach ($this->methodAbstractDocumentBuilderList as $method) {
            $this->assertTrue(method_exists($htmlDocBuilder,$method));
        }
    }

    public function testDocumentationPdfBuilder()
    {
        $pdfDocBuilder = new PdfDocumentBuilder();
        $this->assertInstanceOf(AbstractVehicleDocumentBuilder::class, $pdfDocBuilder);

        foreach ($this->methodAbstractDocumentBuilderList as $method) {
            $this->assertTrue(method_exists($pdfDocBuilder,$method));
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
