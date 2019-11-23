<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentProofController extends Controller
{
    public function index()
    {
        return view('payment-proof.index');
    }
}
