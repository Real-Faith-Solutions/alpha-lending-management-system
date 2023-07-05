<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function agents_commission(){
        return view('reports.agents_commission.index');
    }

    public function sales_reports(){
        return view('reports.sales_reports.index');
    }
    public function fully_paid_accounts(){
        return view('reports.fully_paid_accounts.index');
    }

    public function penalty_history(){
        return view('reports.penalty_history.index');
    }
    public function collection_itinerary_report(){
        return view('reports.collection_itinerary_report.index');
    }

    public function total_amortization(){
        return view('reports.total_amortization.index');
    }
    public function total_actual_payments(){
        return view('reports.total_actual_payments.index');
    }

    public function collection_efficiency(){
        return view('reports.collection_efficiency.index');
    }
}
