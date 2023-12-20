<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLogin(){
        return view('login');
    }

    function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);



            if (Auth::guard('admin')->attempt($credentials, true)) {
                return redirect('admin/dashboard')->with('login sukses');
            } else {
                return redirect('login')->with('login gagal');
            }

    }
}
