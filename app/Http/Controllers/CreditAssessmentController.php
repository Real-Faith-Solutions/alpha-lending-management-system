<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditAssessmentController extends Controller
{
    public function agent_list(){
        return view('master_file.agent_list.index');
    }

    public function credit_application(){
        return view('master_file.borrowers_list.credit_application'); 
    }

    public function collection(){
        return view('master_file.Collector_list.collection');
    }

    public function table(){
        return view('master_file.credit_assessment.table');
    }

    

    
}
