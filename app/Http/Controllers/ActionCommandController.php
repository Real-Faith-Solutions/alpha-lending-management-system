<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ActionCommandController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $users = DB::table('users')->get();
    return view('admin.rights_management.user', ['users' => $users]);
    }

    public function status(Request $request, $id){
        $data = User::find($id);
        if ($data->status ==0){
            $data->status=1;
        }else{
            $data->status=0;
        }
        $data->save();

        return Redirect::to('admin/rights-management/user')->with('success', 'Status Has Been Changed');
    }
}
