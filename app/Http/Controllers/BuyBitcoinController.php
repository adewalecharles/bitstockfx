<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyBitcoinController extends Controller
{
    public function index()
    {
        return view('buy-bitcoin.index');
    }
}
