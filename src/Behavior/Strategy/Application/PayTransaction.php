<?php

namespace DesignPattern\Behavior\Strategy\Application;

use DesignPattern\Behavior\Strategy\Domain\Pay;
use DesignPattern\Behavior\Strategy\Domain\Transaction;

class PayTransaction
{
    public function __construct(
        private readonly Pay $payStrategy,
        private readonly Transaction $transaction
    )
    {
        return $this->payStrategy->pay($this->transaction);
    }

}