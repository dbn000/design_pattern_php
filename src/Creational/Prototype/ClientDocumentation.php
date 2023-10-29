<?php

declare (strict_types = 1);

namespace DesignPattern\Creational\Prototype;

class ClientDocumentation extends AbstractDocumentation {

    public function __construct(string $info)
    {
        $blankDocument = BlankDocumentation::getInstance();
        foreach ($blankDocument->documents() as $document) {
            $clone = $document->clone();
            $clone->fill($info);
            $this->documents[] = $clone;
        }        
    }

    public function show(): void
    {
        foreach ($this->documents as $document) {
            $document->show();
        }
    }

    public function print(): void
    {
        foreach ($this->documents as $document) {
            $document->print();
        }
    }
}