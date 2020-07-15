<?php

namespace App\Http\Controllers;

use App\Paypal\CreatePayment;
use App\Paypal\ExecutePayment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function execute() {
        $payment = new ExecutePayment;
        return $payment->execute();
    }

    public function create() {
        $payment = new CreatePayment;
        return $payment->create();
        //https://www.sandbox.paypal.com/mep/dashboard
    }
}
