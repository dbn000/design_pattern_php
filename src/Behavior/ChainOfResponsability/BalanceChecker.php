<?php

namespace DesignPattern\Behavior\ChainOfResponsability;

class BalanceChecker extends AbstractOperation
{
    public function process(Transaction $transaction)
    {
        if ($transaction->balance < $transaction->amount)
        {
            throw new BalanceCheckerNotvalidException();
        }
        $this->addNext($transaction);
    }

}