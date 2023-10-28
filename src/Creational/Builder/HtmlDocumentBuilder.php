<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

class HtmlDocumentBuilder extends AbstractVehicleDocumentBuilder{

    public function __construct()
    {
        $this->documentacion = new HtmlBuilder();
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