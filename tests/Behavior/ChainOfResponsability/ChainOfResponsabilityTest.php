<?php

declare(strict_types=1);

namespace DesignPattern\Tests\Behavior;

use DesignPattern\Behavior\ChainOfResponsability\BalanceChecker;
use DesignPattern\Behavior\ChainOfResponsability\BalanceCheckerNotvalidException;
use DesignPattern\Behavior\ChainOfResponsability\BrandUserGuide;
use DesignPattern\Behavior\ChainOfResponsability\FiftyBillDispenser;
use DesignPattern\Behavior\ChainOfResponsability\FiveHundredBillDispenser;
use DesignPattern\Behavior\ChainOfResponsability\ModelUserGuide;
use DesignPattern\Behavior\ChainOfResponsability\MultipleOfFiftyChecker;
use DesignPattern\Behavior\ChainOfResponsability\MultipleOfFiftyNotValidException;
use DesignPattern\Behavior\ChainOfResponsability\OneHundredBillDispenser;
use DesignPattern\Behavior\ChainOfResponsability\Transaction;
use DesignPattern\Behavior\ChainOfResponsability\TwoHundredBillDispenser;
use DesignPattern\Behavior\ChainOfResponsability\UserGuideCOR;
use DesignPattern\Behavior\ChainOfResponsability\VehicleUserGuide;
use PHPUnit\Framework\TestCase;

class ChainOfResponsabilityTest extends TestCase
{

    public function testNotMultipleOfFiftyException(): void
    {
        $transaction = new Transaction();
        $transaction->amount = 25;
        $multiple = new MultipleOfFiftyChecker();
        $this->expectException(MultipleOfFiftyNotValidException::class);
        $multiple->process($transaction);
    }

    public function testBalanceCheckerException(): void
    {
        $transaction = new Transaction();
        $transaction->balance = 50;
        $transaction->amount = 500;
        $multiple = new MultipleOfFiftyChecker();
        $multiple->process($transaction);

        $multiple->then(new BalanceChecker());
        $this->expectException(BalanceCheckerNotvalidException::class);
        $multiple->process($transaction);
    }

    public function testCash(): void
    {
        /**
         * Encadena una lista de acciones
         *
         *       - Check multiplo de 50
         *       - Check Importe solicitado superior a balace cuenta actual
         *       - Dispensador de billetes:
         *            - 500
         *            - 200
         *            - 100
         *            - 50
         */
        $multipleOfFiftyChecker = new MultipleOfFiftyChecker();
        $balanceChecker = new BalanceChecker();
        $fiveHundredBillDispenser = new FiveHundredBillDispenser();
        $twoHundredBillDispenser = new TwoHundredBillDispenser();
        $oneHundredBillDispenser = new OneHundredBillDispenser();
        $fiftyBillDispenser = new FiftyBillDispenser();


        /**
         * Validador billetes de 50  >>>>>>>>>>>>>> Validador de balance de cuentas
         * Validador de balance de cuentas >>>> Dispensador de Billetes de 500
         * Dispensador de Billetes de 500 >>>> Dispensador de Billetes de 200
         * Dispensador de Billetes de 200 >>>> Dispensador de Billetes de 100
         * Dispensador de Billetes de 100 >>>> Dispensador de Billetes de 50
         */
        $multipleOfFiftyChecker->then($balanceChecker);
        $balanceChecker->then($fiveHundredBillDispenser);
        $fiveHundredBillDispenser->then($twoHundredBillDispenser);
        $twoHundredBillDispenser->then($oneHundredBillDispenser);
        $oneHundredBillDispenser->then($fiftyBillDispenser);


        /**
         * 1300 = 2x500 + 1x200 + 1x100
         */
        $transaction = new Transaction();
        $transaction->amount = 1300;
        $transaction->balance = 5000;
        $multipleOfFiftyChecker->process($transaction);
        $this->assertEquals($transaction->lasMoveList[FiveHundredBillDispenser::QUANTITY], 2);
        $this->assertEquals($transaction->lasMoveList[TwoHundredBillDispenser::QUANTITY], 1);
        $this->assertEquals($transaction->lasMoveList[OneHundredBillDispenser::QUANTITY], 1);
        $this->assertEquals($transaction->lasMoveList[FiftyBillDispenser::QUANTITY], 0);


        /**
         * 1350 = 2x500 + 1x200+ 1x100 + 1x50
         */
        $transaction = new Transaction();
        $transaction->amount = 1350;
        $transaction->balance = 5000;
        $multipleOfFiftyChecker->process($transaction);
        $this->assertEquals($transaction->lasMoveList[FiveHundredBillDispenser::QUANTITY], 2);
        $this->assertEquals($transaction->lasMoveList[TwoHundredBillDispenser::QUANTITY], 1);
        $this->assertEquals($transaction->lasMoveList[OneHundredBillDispenser::QUANTITY], 1);
        $this->assertEquals($transaction->lasMoveList[FiftyBillDispenser::QUANTITY], 1);
    }
}
