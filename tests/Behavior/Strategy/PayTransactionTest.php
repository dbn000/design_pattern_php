<?php

namespace Behavior\Strategy;

use DesignPattern\Behavior\Strategy\Domain\Transaction;
use DesignPattern\Behavior\Strategy\Application\PayTransaction;
use DesignPattern\Behavior\Strategy\Domain\TransactionCreditCard;
use DesignPattern\Tests\Behavior\Strategy\TransactionMother;
use PHPUnit\Framework\TestCase;

class PayTransactionTest extends TestCase
{
    private $transaction;
    private $pay;

    public function test_it_should_throw_an_exception_if_the_transaction_is_not_valid(): void
    {
        $this->expectException(\PayNotvalidException::class);
        $pay = TransactionMother::create(1, 0);
        $pay->pay(new TransactionCreditCard());
    }

    public function test_it_should_pay_with_credit_card(): void
    {
        $pay = new PayTransaction();
        $pay->pay(new TransactionCreditCard());
    }
}