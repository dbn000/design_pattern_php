<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

abstract class AbstractDocumentGeneratorBuilder{

    protected array $content;
    abstract public function addDocument(string $document): void;
    abstract public function print(): void;

    public function countDocuments(): int
    {
        return count($this->content);
    }
}