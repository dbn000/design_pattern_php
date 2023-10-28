<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

class PdfDocumentGeneratorBuilder extends AbstractDocumentGeneratorBuilder{

    public function addDocument(string $documento): void
    {
        if (str_starts_with($documento, '<Pdf>')) {
            $this->content[] = $documento;
        }
    }

    public function print(): void
    {
        echo 'Documento PDF' . PHP_EOL;
        foreach ($this->content as $documento) {
            echo $documento . PHP_EOL;
        }
    }


}