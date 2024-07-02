<?php

namespace DesignPattern\Behavior\Strategy\Domain;

use DesignPattern\Behavior\Strategy\PayNotvalidException;
use DesignPattern\Behavior\Strategy\Transaction;

interface Pay
{

    public function pay(Transaction $transaction): Transaction;

    /**
     * @return bool
     * @throws PayNotvalidException
     */
    public function validate(): bool;

    public function executeTransaction();

}