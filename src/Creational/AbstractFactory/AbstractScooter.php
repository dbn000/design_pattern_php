<?php

declare(strict_types=1);

namespace DesignPattern\Creational\AbstractFactory;

abstract class AbstractScooter
{
    protected string $marca;
    protected string $color;
    protected int $potencia;

    public function __construct(
        string $marca,
        string $color,
        int $potencia
    ) {
        $this->marca = $marca;
        $this->color = $color;
        $this->potencia = $potencia;
    }

    abstract public function getData(): void;
}