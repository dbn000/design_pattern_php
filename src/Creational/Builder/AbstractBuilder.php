<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Builder;

abstract class AbstractBuilder{

    protected array $contenido;
    abstract public function agregaDocumento(string $documento): void;
    abstract public function imprime(): void;
}