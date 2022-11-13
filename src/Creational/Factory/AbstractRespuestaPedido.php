<?php

declare(strict_types=1);

namespace DesignPattern\Creational\Factory;


abstract class AbstractRespuestaPedido {

    public int $status;
    public string $message;

    public function __construct(int $status, string $message)
    {    
        $this->status = $status;       
        $this->message = $message;        
    }

    abstract public function resumenPedido(): AbstractRespuestaPedido;
}