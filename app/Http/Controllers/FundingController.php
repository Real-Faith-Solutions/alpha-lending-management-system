<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FundingController extends Controller
{
    public function print_contract(){
        return view('funding.print_contract.index');
    }

    public function print_voucher(){
        return view('funding.print_voucher.index');
    }
}
