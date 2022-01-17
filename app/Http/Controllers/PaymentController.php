<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\Exception\ApiErrorException;

class PaymentController extends Controller
{
    public function charge(Request $request)
    {
        try {
            Stripe::setApiKey('sk_test_51K9PFPCIrU9IxPrNXwFn07YFJE3McRG0HgHkW8p51j2rUJbOJOY6QM740Er8KXId9KkxlYTGcOEd6hG2BeV8l9Es00Nw83llx4');

            $charge = PaymentIntent::create([
                'payment_method_types' => ['card'],
                'amount' => $request->amount * 100,
                'currency' => 'eur',
            ]);

            return json_encode(array('client_secret' => $charge->client_secret, 'id' => $charge->id, 'method' => $charge->payment_method_types));
        } catch (ApiErrorException $exception) {
            dd($exception->getMessage());
            abort(500, $exception->getMessage());
            return;
        }
    }
}
