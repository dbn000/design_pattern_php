<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Creational\Prototype;

use DesignPattern\Creational\Prototype\AbstractDocument;
use DesignPattern\Creational\Prototype\BlankDocumentation;
use DesignPattern\Creational\Prototype\ClientDocumentation;
use DesignPattern\Creational\Prototype\DocAssignmentCertificate;
use DesignPattern\Creational\Prototype\DocPurchaseOrder;
use DesignPattern\Creational\Prototype\DocVehicleRegistration;
use PHPUnit\Framework\TestCase;
/**
 * Class PrototypeTest.
 *
 * @package DesignPattern\Creational\Prototype
 */
class PrototypeTest extends TestCase
{
    private array $documentsToTest;
    private string $newInfoString = 'NewInfo';

    /**
     * @return AbstractDocument[]
     */
    private function getDocumentList(): array
    {
        if (empty($this->documentsToTest))
        {
            $this->documentsToTest[] = new DocAssignmentCertificate();
            $this->documentsToTest[] = new DocPurchaseOrder();
            $this->documentsToTest[] = new DocVehicleRegistration();
        }
        return $this->documentsToTest;
    }

    public function testAddDocumentToBlank(): void
    {
        // Primera vez que se instancia debe estar completamente vacio (Singleton)
        $blankPrototype = BlankDocumentation::getInstance();
        $this->assertEmpty($blankPrototype->documents());

        // Add documents
        foreach ($this->getDocumentList() as $document) {
            $blankPrototype->add($document);
        }
        $this->assertNotEmpty($blankPrototype->documents());
        $this->assertCount(count($this->getDocumentList()), $blankPrototype->documents());

        // Test Clonado
        $clonedDocuments = new ClientDocumentation($this->newInfoString);
        $this->assertCount(count($clonedDocuments->documents()), $blankPrototype->documents());
    }

    public function testRemoveDocuments()
    {
        $blankPrototype = BlankDocumentation::getInstance();

        // Debe tener los documentos ininicalizados en testAddDocumentToBlank
        $this->assertNotEmpty($blankPrototype->documents());
        $this->assertCount(count($this->getDocumentList()), $blankPrototype->documents());

        // Test borrado documento
        $docToRemove = $blankPrototype->documents()[0];
        $blankPrototype->remove($docToRemove);
        $this->assertCount(count($this->getDocumentList()) - 1, $blankPrototype->documents());
    }

}
