<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;

class FactoryTestLauncher {

    public function __construct()
    {
        $CANTIDAD_A = 500;
        $CANTIDAD_B = 4000;
        $CANTIDAD_C = 5000;
        $CANTIDAD_D = 6000;
        

        $clienteContado = new ClienteContado();

        $clienteContado->nuevoPedido($CANTIDAD_A);
        $clienteContado->nuevoPedido($CANTIDAD_B);
        $clienteContado->nuevoPedido($CANTIDAD_C);
        $clienteContado->nuevoPedido($CANTIDAD_D);


        $clienteCredito = new ClienteCredito();
        $clienteCredito->nuevoPedido($CANTIDAD_A);
        $clienteCredito->nuevoPedido($CANTIDAD_B);
        $clienteCredito->nuevoPedido($CANTIDAD_C);
        $clienteCredito->nuevoPedido($CANTIDAD_D);


        $clienteContado = new ClienteContado();
        $clienteContado->nuevoPedido(4000);
        $respuestaPedido = $clienteContado->mostrarRespuestasPedido()[0] ?? null;


        echo json_encode($respuestaPedido->status);
    }
}