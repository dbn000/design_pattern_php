<?php

declare (strict_types=1);

namespace DesignPattern\Structural\Adapter;

interface DocumentoInterfaz
{
    public function setContenido(string $contenido): void;

    public function dibuja(): EntityDibujo;

    public function imprime(): EntityHtml;
    
}