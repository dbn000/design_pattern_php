<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

class ConstructorDocumentacionHtml extends AbstractConstructorDocumentacionVehiculo{

    public function __construct()
    {
        $this->documentacion = new DocumentacionHtml();
    }
    public function generaFormularioPedido(string $nombreCliente):void
    {
        $documento = "<html> Formulario de solicitud del cliente: ${nombreCliente} </html>";
        $this->documentacion->agregaDocumento($documento);

    }
    public function generaSolicitudMatriculacion(string $nombreSolicitante):void
    {
        $documento = "<html> Solicitud de matriculación de: ${nombreSolicitante} </html>";
        $this->documentacion->agregaDocumento($documento);
    }

}