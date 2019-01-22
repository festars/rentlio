<?php

namespace App\Http\Controllers\Payment;

use App\Listing;
use Stripe\Stripe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentProcessorController extends Controller
{
    public function store(Listing $listing, Request $request)
    {       

        try {
            $charge = \Stripe\Charge::create([
                'amount' => $listing->price * 100, 
                'currency' => 'cad', 
                'source' => $request->stripeToken, 
                'application_fee' => $listing->price 
            ], [
                'stripe_account' => $listing->landlord->stripe_id
            ]);
        } catch (Exception $e) {
            return back()->withError('Something went wrong while processing your payment');
        }

        return redirect()->route('listings.show', $listing)->withSuccess('Payment made successfully!');

    }
}
