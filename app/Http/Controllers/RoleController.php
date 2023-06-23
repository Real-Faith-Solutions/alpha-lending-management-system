<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('rights_management.role.index', compact('roles'));
    }

    public function roleInRegister(){
        $roles = Role::all();
        return view('auth.register', compact('roles'));

    }



}
