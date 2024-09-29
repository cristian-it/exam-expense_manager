<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class AuthController extends Controller
{
    public function login()
    {
        // dd(Hash::make(123456));
        if(!empty(Auth::check()))
        {
            return redirect('adminPanel/dashboard');
        }
        return view('auth.login');
    }

    public function auth_login(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember))
        {
            return redirect('adminPanel/dashboard');
        }
        else{
            return redirect()->back()->with('error', "Please enter your email address and password");
        }
    }

    public function auth_logout()
    {
        Auth::logout();
        return redirect(url(''));
    }
}
