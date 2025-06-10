<?php

namespace DesignPattern\Behavior\Strategy\Domain;

use DesignPattern\Behavior\Strategy\Domain\PayNotValidException;
use DesignPattern\Behavior\Strategy\Transaction;

interface Pay
{

    public function pay(Transaction $transaction): Transaction;

    /**
     * @return bool
     * @throws PayNotValidException
     */
    public function validate(): bool;

    public function executeTransaction();

}