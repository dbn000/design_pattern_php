<?php

declare(strict_types=1);

namespace DesignPattern\Structural\Adapter;


class AdapterTestLauncher {

    public function __construct()
    {

        $contenidoHtml = "Contenido de prueba HTML";

        $documentoHtml = new DocumentoHtml();
        $documentoHtml->setContenido($contenidoHtml);

        $htmlEntityDibuja = $documentoHtml->dibuja();
        $htmlEntityDibuja->getData();

        $htmlEntityImprime = $documentoHtml->imprime();
        $htmlEntityImprime->getData();


        echo "<br/> <br/> <br/>";

        $contenidopDF = "Contenido de prueba PDF";

        $documentoPdf = new DocumentoPdf();
        $documentoPdf->setContenido($contenidopDF);

        $pdfEntityDibuja =$documentoPdf->dibuja();
        $pdfEntityDibuja->getData();

        $pdfEntityImprime = $documentoPdf->imprime();
        $pdfEntityImprime->getData();


        //$documentoPdf = new DocumentoPdf();

    }
}