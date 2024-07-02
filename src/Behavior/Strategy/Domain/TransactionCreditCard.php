<?php

namespace DesignPattern\Behavior\Strategy\Domain;

use \DesignPattern\Behavior\Strategy\Domain\Transaction;

class TransactionCreditCard implements Transaction
{
    public float $amount;
    public float $balance;


    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }
}