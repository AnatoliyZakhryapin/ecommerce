<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CheckoutController extends Controller
{
    public function payment(): View
    {
        return view('checkout.payment');
    }
}