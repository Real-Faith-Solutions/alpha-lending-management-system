<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterFileController extends Controller
{
    public function borrower_list(){
        return view('master_file.borrower_list.index');
    }

    public function agent_list(){
        return view('master_file.agent_list.index');
    }

    public function credit_application(){
        return view('master_file.credit_application.index');
    }

    public function credit_assessment(){
        return view('master_file.credit_assessment.index');
    }

    public function collector_list(){
        return view('master_file.collector_list.index');
    }
}
