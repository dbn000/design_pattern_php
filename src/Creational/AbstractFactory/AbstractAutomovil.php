<?php

declare(strict_types=1);

namespace DesignPattern\Creational\AbstractFactory;

abstract class AbstractAutomovil
{
    protected string $marca;
    protected string $color;
    protected int $potencia;
    protected float $espacio;

    public function __construct(
        string $marca,
        string $color,
        int $potencia,
        float $espacio
    ) {
        $this->marca = $marca;
        $this->color = $color;
        $this->potencia = $potencia;
        $this->espacio = $espacio;
    }

    abstract public function getData(): void;
}