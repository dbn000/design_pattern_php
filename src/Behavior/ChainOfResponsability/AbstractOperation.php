<?php

namespace DesignPattern\Behavior\ChainOfResponsability;

abstract class AbstractOperation
{
    protected $operation;
    public function then(AbstractOperation $operation)
    {
        $this->operation = $operation;
    }
    public function addNext(Transaction $transaction):void
    {
        if ($this->operation){
            $this->operation->process($transaction);
        }
    }

    abstract public function process(Transaction $transaction);
}