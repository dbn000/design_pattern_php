<?php

declare (strict_types = 1);

namespace DesignPattern\Creational\Prototype;

abstract class AbstractDocumento {

    protected string $contenido;

    public function duplica(): self
    {
        return clone $this;
    }

    public function rellena(string $informaciones): void 
    {
        $this->contenido = $informaciones;       
    }

    public function muestraInfo(array $infoLista): void
    {
        echo implode(' - ', $infoLista);
        echo "<br/>";
    }

    abstract public function imprime(): void;
    abstract public function muestra(): void;    
}