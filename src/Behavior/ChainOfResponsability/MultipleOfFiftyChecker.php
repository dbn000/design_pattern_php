<?php

declare(strict_types=1);

namespace DesignPattern\Behavior\ChainOfResponsability;

class MultipleOfFiftyChecker extends AbstractOperation {

    /**
     * @throws MultipleOfFiftyNotValidException
     */
    public function process(Transaction $transaction)
    {
        if ($transaction->amount % 50 !== 0)
        {
            throw new MultipleOfFiftyNotValidException();
        }

        $this->addNext($transaction);
    }
}