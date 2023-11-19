<?php

namespace DesignPattern\Behavior\ChainOfResponsability;

class Transaction
{
    public $amount;
    public $balance;
    public $lasMoveList = [
        FiveHundredBillDispenser::QUANTITY => 0,
        TwoHundredBillDispenser::QUANTITY => 0,
        OneHundredBillDispenser::QUANTITY => 0,
        FiftyBillDispenser::QUANTITY => 0
    ];

}