<?php

namespace DesignPattern\Behavior\Strategy\Domain;

interface Transaction
{

    /**
     * @return float
     */
    public function getAmount(): float;

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void;

    /**
     * @return float
     */
    public function getBalance(): float;

    /**
     * @param float $balance
     */
    public function setBalance(float $balance): void;

}