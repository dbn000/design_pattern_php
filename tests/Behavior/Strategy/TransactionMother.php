<?php

namespace DesignPattern\Tests\Behavior\Strategy;

use DesignPattern\Behavior\Strategy\Domain\Transaction;

class TransactionMother implements Transaction
{

    private function __construct(
        private float $amount,
        private float $balance
    )
    {
    }

    public static function create(float $amount, float $balance): Transaction
    {
        return new self($amount, $balance);
    }

    /**
     * @inheritDoc
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @inheritDoc
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @inheritDoc
     */
    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}