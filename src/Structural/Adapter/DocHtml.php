<?php

declare (strict_types=1);
namespace DesignPattern\Structural\Adapter;

class DocHtml implements DocInterface
{
    protected string $content;
    
	/**
	 * @param string $content
	 */
	public function setContent(string $content): void {
        $this->content = $content;
	}
	
	/**
	 */
	public function draw(): EntityPicture {
        return new EntityPicture(" DIBUJA: " . $this->content);
	}
	
	/**
	 */
	public function print(): EntityHtml {
        return new EntityHtml(" IMPRIME: " . $this->content);
	}
}