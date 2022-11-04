<?php

declare(strict_types=1);

namespace DesignPattern\Creational\AbstractFactory;

use DesignPattern\Creational\AbstractFactory\AbstractScooter;

class FabricaVehiculoElectricidad implements FabricaVehiculosInterfaz
{
    public function creaAutomovil(
        string $marca,
        string $color,
        int $potencia,
        float $espacio
    ): AbstractAutomovil {
        return new AutomovilElectricidad($marca, $color, $potencia, $espacio);
    }

    public function creaScooter(
        string $marca,
        string $color,
        int $potencia
    ): AbstractScooter {
        return new ScooterElectricidad($marca, $color, $potencia);
    }
}
