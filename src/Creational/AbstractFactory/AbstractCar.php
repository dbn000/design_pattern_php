<?php

declare(strict_types=1);

namespace DesignPattern\Creational\AbstractFactory;

abstract class AbstractCar
{
    protected string $brand;
    protected string $color;
    protected int $engine;
    protected float $cabinSpace;

    public function __construct(
        string $brand,
        string $color,
        int $engine,
        float $cabinSpace
    ) {
        $this->brand = $brand;
        $this->color = $color;
        $this->engine = $engine;
        $this->cabinSpace = $cabinSpace;
    }

    abstract public function getData(): void;
}