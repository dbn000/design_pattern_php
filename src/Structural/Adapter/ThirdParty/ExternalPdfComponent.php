<?php

declare (strict_types=1);
namespace DesignPattern\Structural\Adapter\ThirdParty;

class ExternalPdfComponent
{

    /**
     * Simulacion de componente externo de terceros al que debemos adaptarnos
     */
    protected string $contenido;

    public function pdfFijaContenido(string $contenido): void
    {
        $this->contenido = $contenido;
    }

    public function preparaVisualizacion(): string
    {
        return "Visualiza el contenido PDF : Comienzo";
    }

    public function pdfRefresca(): string
    {
        return "Visualiza el contenido :" . $this->contenido;
    }

    public function terminaVisualizacion(): string
    {
        return "Visualiza el contenido PDF : Termina";
    }


    public function enviaImpresora(): string
    {
        return "Imprime el contenido :" . $this->contenido;
    }
}