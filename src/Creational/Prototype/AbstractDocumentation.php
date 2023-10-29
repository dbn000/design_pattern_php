<?php

declare (strict_types = 1);

namespace DesignPattern\Creational\Prototype;

abstract class AbstractDocumentation {

    /**
     * @var AbstractDocument[]
     */
    protected array $documents = [];

    public function documents(): array
    {
        return $this->documents;
    }
}