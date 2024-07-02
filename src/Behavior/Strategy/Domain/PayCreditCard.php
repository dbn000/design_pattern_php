<?php

namespace DesignPattern\Behavior\Strategy\Domain;

use DesignPattern\Behavior\Strategy\Transaction;

class PayCreditCard implements Pay
{
    private Transaction $transaction;

    public function pay(Transaction $transaction): Transaction
    {
        $this->transaction = $transaction;
        $this->validate();
        $this->executeTransaction();

        return $this->transaction;
    }

    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        $customAction = $this->callBank();
        if ($customAction) {
            return true;
        }

        if ($this->transaction->balance < $this->transaction->amount) {
            throw new PayNotvalidException();
        }
        return true;
    }

    public function executeTransaction()
    {
        $this->transaction->balance -= $this->transaction->amount;

    }

    private function callBank()
    {
        // call bank
    }
}