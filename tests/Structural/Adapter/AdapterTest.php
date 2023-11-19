<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Structural;

use DesignPattern\Structural\Adapter\DocHtml;
use DesignPattern\Structural\Adapter\DocPdf;
use DesignPattern\Structural\Adapter\EntityPicture;
use DesignPattern\Structural\Adapter\EntityDocument;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{

    /**
     * @testAdapter
     */
    public function testAdapter(): void
    {
        $this->assertTrue(true);

        $contentHtml = "<html>  DOC DE PRUEBA HTML </html>";

        $htmlDoc = new DocHtml();
        $htmlDoc->setContent($contentHtml);

        $htmlEntityDraw = $htmlDoc->draw();
        $this->assertInstanceOf(EntityDocument::class, $htmlEntityDraw);

        $htmlEntityPrint = $htmlDoc->print();
        $this->assertInstanceOf(EntityDocument::class, $htmlEntityPrint);


        $pdfContent = "Contenido de prueba PDF";

        $pdfDocument = new DocPdf();
        $pdfDocument->setContent($pdfContent);

        $pdfEntityDraw =$pdfDocument->draw();
        $this->assertInstanceOf(EntityDocument::class, $pdfEntityDraw);

        $pdfEntityPrint = $pdfDocument->print();
        $this->assertInstanceOf(EntityDocument::class, $pdfEntityPrint);/**/
    }
}
