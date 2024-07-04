<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    } 

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'passsword');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('index');
        }

        return redirect()->back()->withInput($request->only('email'));
    }
}
