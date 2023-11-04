<?php

declare (strict_types=1);
namespace DesignPattern\Structural\Adapter;

use DesignPattern\Structural\Adapter\ThirdParty\ExternalPdfComponent;

class DocPdf implements DocInterface
{
	protected ExternalPdfComponent $externalPdfComponent;

	public function __construct()
	{
		$this->externalPdfComponent = new ExternalPdfComponent();
	}
    
	/**
	 * @param string $content
	 */
	public function setContent(string $content): void {
		$this->externalPdfComponent->pdfFijaContenido($content);
	}
	
	/**
	 */
	public function draw(): EntityPicture {
        
		$prepare = $this->externalPdfComponent->preparaVisualizacion();
		$refresh = $this->externalPdfComponent->pdfRefresca();
		$finish = $this->externalPdfComponent->terminaVisualizacion();

		$drawContent = $prepare . PHP_EOL . $refresh . PHP_EOL .  $finish;
		return new EntityPicture($drawContent);
	}
	
	/**
	 */
	public function print(): EntityHtml {
		$content = $this->externalPdfComponent->enviaImpresora();
		return new EntityHtml($content);
	}
}