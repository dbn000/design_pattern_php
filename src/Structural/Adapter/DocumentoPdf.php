<?php

declare (strict_types=1);
namespace DesignPattern\Structural\Adapter;

class DocumentoPdf implements DocumentoInterfaz 
{
	protected ComponentePdf $componentePdf;

	public function __construct()
	{
		$this->componentePdf = new ComponentePdf();
	}
    
	/**
	 * @param string $contenido
	 */
	public function setContenido(string $contenido): void {
		$this->componentePdf->pdfFijaContenido($contenido);
	}
	
	/**
	 */
	public function dibuja(): EntityDibujo {
        
		$prepara = $this->componentePdf->preparaVisualizacion();
		$refresca = $this->componentePdf->pdfRefresca();
		$termina = $this->componentePdf->terminaVisualizacion();

		$contentDibujo = $prepara . PHP_EOL . $refresca . PHP_EOL .  $termina;
		return new EntityDibujo($contentDibujo);
	}
	
	/**
	 */
	public function imprime(): EntityHtml {
		$contentImprime = $this->componentePdf->enviaImpresora();
		return new EntityHtml($contentImprime);
	}
}