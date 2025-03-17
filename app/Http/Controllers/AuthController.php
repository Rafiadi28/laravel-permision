<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
public function login()
    {
    return view('auth.login');
    }
    public function auth_login(Request $request)
    {
        $remembered = !empty($request->remember) ? true: false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remembered))
        {
            return redirect()->route('panel/dashboard');
        }
        else
        return redirect()->back()->with('error',"Please Enter Your Password");
    }
}
