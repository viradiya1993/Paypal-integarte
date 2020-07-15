<?php


namespace App\Paypal;


use PayPal\Api\Agreement;
use PayPal\Api\Payer;
use PayPal\Api\Plan;
use PayPal\Api\ShippingAddress;

class PaypalAgreement extends Paypal
{
    public function create($id) {

     return redirect($this->Agreement($id));

    }

    protected function Agreement($id): string
    {
        $agreement = new Agreement();
        $agreement->setName('Base Agreement')
            ->setDescription('Basic Agreement')
            ->setStartDate('2019-06-17T9:45:04Z');

        $agreement->setPlan($this->Plan($id));

        $agreement->setPayer($this->Payer());

        $agreement->setShippingAddress($this->shippingAddress());

        $agreement = $agreement->create($this->apiContext);

        return $agreement->getApprovalLink();
    }

    protected function Plan($id): Plan{
        $plan = new Plan();
        $plan->setId($id);
        return $plan;
    }

    protected function Payer(): Payer{
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        return $payer;
    }

    protected function shippingAddress(): ShippingAddress {
        $shippingAddress = new ShippingAddress();
        $shippingAddress->setLine1('111 First Street')
            ->setCity('Saratoga')
            ->setState('CA')
            ->setPostalCode('95070')
            ->setCountryCode('US');
        return $shippingAddress;
    }

    public function execute($token) {
        $agreement = new Agreement();
        $agreement->execute($token, $this->apiContext);
    }
}
