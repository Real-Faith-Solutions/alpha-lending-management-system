<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkSpaceController extends Controller
{
    public function payments_schedule(){
        return view('workspace.payments_schedule.index');
    }

    public function cash_payments(){
        return view('workspace.cash_payments.index');
    }

    public function cheque_payment(){
        return view('workspace.cheque_payment.index');
    }

}
