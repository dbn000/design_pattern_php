<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

class PdfDocumentBuilder extends AbstractVehicleDocumentBuilder{

    public function __construct()
    {
        $this->documentacion = new PdfBuilder();
    }
    public function generaFormularioPedido(string $nombreCliente):void
    {
        $documento = "<Pdf> Formulario de solicitud del cliente:  ${nombreCliente} </Pdf>";
        $this->documentacion->agregaDocumento($documento);

    }
    public function generaSolicitudMatriculacion(string $nombreSolicitante):void
    {
        $documento = "<Pdf> Solicitud de matriculación de:  ${nombreSolicitante} </Pdf>";
        $this->documentacion->agregaDocumento($documento);
    }

}