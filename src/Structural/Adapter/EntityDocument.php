<?php

declare (strict_types=1);
namespace DesignPattern\Structural\Adapter;

class EntityDocument
{
    protected string $contenido;

    public function __construct(string $contenido)
    {
        $this->contenido = $contenido;
    }

    public function getData()
    {
        echo $this->contenido . '<br/>';
    }
}