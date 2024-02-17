<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;

class adminController extends Controller
{
    //

    public function dashboard(){
        return view('admin.dashboard');
    }
    public function login(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data=$request->all();
            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required|max:30'
            ];
            $customMessages= [
                'email.required'=> "Email Is required",
                'email.email' => 'Email Is invalid',
                'password.required' => 'Password is required'
            ];

            $this->validate($request,$rules,$customMessages);
            if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect('admin/dashboard');
            } else {
                return redirect()->back()->with("error_message", "Invalid Email Or Password!");
            }
         }    
        return view('admin.login');
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        return redirect('admin/login');
    }
}
