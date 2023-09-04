<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function getAllData()
    {
        return view('dashboard.index');
    }
}
