<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //

    public function dashboard(){
        return view('admin.dashboard');
    }
    public function login()
    {
        return view('admin.login');
    }
}
