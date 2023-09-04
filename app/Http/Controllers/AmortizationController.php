<?php

namespace App\Http\Controllers;

use App\Models\Amortization;
use Illuminate\Http\Request;

class AmortizationController extends Controller
{
    public function addAmortization(Request $request){
        Amortization::create([
            'date' => $request->date,
            'payment' => $request->payment,
            'interest_paid' => $request->interest_paid,
            'interest_amount' => $request->interest_amount,
            'principal' => $request->principal,
            'balance' => $request->balance,
        ]);

        return "Success!";
    }

    public function getAmortization(Request $request){
        $amortization = Amortization::all();

         return $amortization;
     }
}
