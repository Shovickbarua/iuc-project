<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
class StripePaymentController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }

    // public function stripePost(Request $request)
    // {
    //     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    //     Stripe\Charge::create ([

    //             "amount" => 100 * 100,

    //             "currency" => "usd",

    //             "source" => $request->stripeToken,

    //             "description" => "Test payment from itsolutionstuff.com." 

    //     ]);
    //     Session::flash('success', 'Payment successful!');
    //     return back();
    // }
    public function stripePost(Request $request)

{

    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    $customer = Stripe\Customer::create(array(
            "address" => [
                    "line1" => "Virani Chowk",
                    "postal_code" => "360001",
                    "city" => "Rajkot",
                    "state" => "GJ",
                    "country" => "BD",
                ],
            "email" => session('email'),
            "name" => session('name'),
            "source" => $request->stripeToken
         ));
    Stripe\Charge::create ([
            "amount" => (session('roomcategory') * session('amount'))* 100,
            "currency" => "usd",
            "customer" => $customer->id,
            "description" => "Test payment from itsolutionstuff.com.",
            "shipping" => [
              "name" => session('name'),
              "address" => [
                "line1" => "510 Townsend St",
                "postal_code" => "98140",
                "city" => "San Francisco",
                "state" => "CA",
                "country" => "US",
              ],
            ]
    ]); 
    Session::flash('success', 'Payment successful!');
    return back();
}
}
