<?php

namespace App\Http\Controllers;

use App\Paypal\PaypalAgreement;
use App\Paypal\SubscriptionPlan;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function createPlan() {
        $plan = new SubscriptionPlan();
        return $plan->create();
    }

    public function listPlan() {
        $plan = new SubscriptionPlan();
        return $plan->listPlan();
    }

    public function planDetails($id) {
        $plan = new SubscriptionPlan();
        return $plan->planDetails($id);
    }

    public function activatePlan($id) {
        $plan = new SubscriptionPlan();
        return $plan->activate($id);
    }

    public function CreateAgreement($id) {
         $agreement = new PaypalAgreement();
         return $agreement->create($id);
    }

    public function executeAgreement($status) {

        if($status == 'true') {
            $agreement = new PaypalAgreement();
            $agreement->execute(request('token'));
            return 'Done';
        }
    }
}
