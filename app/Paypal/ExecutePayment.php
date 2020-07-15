<?php


namespace App\Paypal;


use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class ExecutePayment extends Paypal
{
    public function execute() {

        $payment = $this->GetThePayment();

        $execution = $this->CreateExecution();

        $execution->addTransaction($this->Transaction());

        $result = $payment->execute($execution, $this->apiContext);

        return $result;
    }

    protected function GetThePayment(): Payment {
        $paymentId = request('paymentId');
        $payment = Payment::get($paymentId, $this->apiContext);

        return $payment;
    }

    protected function CreateExecution(): PaymentExecution {
        $execution = new PaymentExecution();
        $execution->setPayerId(request('PayerID'));

        return $execution;
    }

    protected function Transaction(): Transaction {
        $transaction = new Transaction();
        $transaction->setAmount($this->Amount());

        return $transaction;
    }
}
