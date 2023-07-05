<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterFileController extends Controller
{
    public function borrower_list(){
        return view('master_file.borrowers_list.credit_application');
    }

    public function agent_list(){
        return view('master_file.agent_list.index');
    }

}
