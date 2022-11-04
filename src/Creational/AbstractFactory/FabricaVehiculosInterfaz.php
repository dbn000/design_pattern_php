<?php

declare(strict_types=1);

namespace DesignPattern\Creational\AbstractFactory;

use DesignPattern\Creational\AbstractFactory\AbstractAutomovil;
use DesignPattern\Creational\AbstractFactory\AbstractScooter;

interface FabricaVehiculosInterfaz
{
    public function creaAutomovil(
        string $marca,
        string $color,
        int $potencia,
        float $espacio
    ): AbstractAutomovil;

    public function creaScooter(
        string $marca,
        string $color,
        int $potencia
    ): AbstractScooter;
}