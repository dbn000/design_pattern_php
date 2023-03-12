<?php

declare (strict_types=1);
namespace DesignPattern\Structural\Adapter;

class DocumentoHtml implements DocumentoInterfaz 
{
    protected $contenido;
    
	/**
	 * @param string $contenido
	 */
	public function setContenido(string $contenido): void {
        $this->contenido = $contenido;
	}
	
	/**
	 */
	public function dibuja(): EntityDibujo {
        return new EntityDibujo(" DIBUJA: " . $this->contenido);
	}
	
	/**
	 */
	public function imprime(): EntityHtml {
        return new EntityHtml(" IMPRIME: " . $this->contenido);
	}
}