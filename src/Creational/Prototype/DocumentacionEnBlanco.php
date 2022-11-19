<?php

declare (strict_types = 1);

namespace DesignPattern\Creational\Prototype;

class DocumentacionEnBlanco extends AbstractDocumentacion {

    // Se implementa el patron Singleton para utilizar siempre el mismo documento en blanco
    private static ?self $instancia = null;

    public static function getInstancia(): self
    {
        if (! self::$instancia) {
            self::$instancia = new self();
        }

        return self::$instancia;
    }


    public function agrega(AbstractDocumento $documento): void
    {
        $this->documentos[] = $documento;
    }

    public function elimina(AbstractDocumento $documento): void
    {
        if (false !== ($indice = array_search($documento, $this->documentos, true))) {
            unset($this->documentos[$indice]);
        }
    }
}