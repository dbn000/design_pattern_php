<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

class HtmlDocumentGeneratorBuilder extends AbstractDocumentGeneratorBuilder{

    public function addDocument(string $document): void
    {
        if (str_starts_with($document, '<html>')) {
            $this->content[] = $document;
        }
    }

    public function print(): void
    {
        echo 'Documento HTML' . PHP_EOL;
        foreach ($this->content as $document) {
            echo $document . PHP_EOL;
        }
    }
}