<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

class PdfBuilder extends AbstractBuilder{

    public function agregaDocumento(string $documento): void
    {
        if (str_starts_with($documento, '<Pdf>')) {
            $this->contenido[] = $documento;
        }
    }

    public function imprime(): void
    {
        echo 'Documento PDF' . PHP_EOL;
        foreach ($this->contenido as $documento) {
            echo $documento . PHP_EOL;
        }
    }

}