<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Structural;

use DesignPattern\Structural\Adapter\DocumentoHtml;
use DesignPattern\Structural\Adapter\DocumentoPdf;
use DesignPattern\Structural\Adapter\EntityDibujo;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{

    /**
     * @testAdapter
     */
    public function testAdapter(): void
    {

        $contenidoHtml = "Contenido de prueba HTML";

        $documentoHtml = new DocumentoHtml();
        $documentoHtml->setContenido($contenidoHtml);

        $htmlEntityDibuja = $documentoHtml->dibuja();
        $this->assertInstanceOf(EntityDibujo::class, $htmlEntityDibuja);


        $htmlEntityImprime = $documentoHtml->imprime();
        $this->assertInstanceOf(EntityHtml::class, $htmlEntityImprime);


        $contenidopDF = "Contenido de prueba PDF";

        $documentoPdf = new DocumentoPdf();
        $documentoPdf->setContenido($contenidopDF);

        $pdfEntityDibuja =$documentoPdf->dibuja();
        $this->assertInstanceOf(EntityDibujo::class, $pdfEntityDibuja);

        $pdfEntityImprime = $documentoPdf->imprime();
        $this->assertInstanceOf(EntityHtml::class, $pdfEntityImprime);
    }
}
