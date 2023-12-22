<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;



class AuthController extends Controller
{
   public  function showLogin(){
        return view('login');
    }

    public function loginProcess(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        } else {
            return back()->withErrors([
                'error' => 'login gagal',
            ])->withInput(request(['email']));
        }
    }


    public function logout(){
        Auth::logout();

        return redirect('login');
    }


}
