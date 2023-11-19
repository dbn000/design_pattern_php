<?php

namespace DesignPattern\Behavior\ChainOfResponsability;

class FiftyBillDispenser extends AbstractOperation
{
    public const QUANTITY = 50;

    public function process(Transaction $transaction)
    {
        if ($transaction->amount < self::QUANTITY)
        {
            $this->addNext($transaction);
            return;
        }

        $bills = intval($transaction->amount / self::QUANTITY);
        $remain = $transaction->amount % self::QUANTITY;

        $transaction->lasMoveList[self::QUANTITY] = $bills;

        if ($remain !== 0) {
            $transaction->amount = $remain;
            $this->addNext($transaction);
        }
    }
}