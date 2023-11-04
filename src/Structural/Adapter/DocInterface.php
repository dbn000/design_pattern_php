<?php

declare (strict_types=1);

namespace DesignPattern\Structural\Adapter;

interface DocInterface
{
    public function setContent(string $contenido): void;

    public function draw(): EntityPicture;

    public function print(): EntityHtml;
    
}