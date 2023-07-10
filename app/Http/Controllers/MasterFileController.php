<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterFileController extends Controller
{
    public function agent(){
        return view('master_file.agent_list.agent');
    }

    public function index(){
        return view('master_file.borrower_list.index');
    }

    public function credit_assessment(){
        return view('master_file.credit_file.credit_assessment');
    }

    public function collection(){
        return view('master_file.collector_list.collection');
    }

}
