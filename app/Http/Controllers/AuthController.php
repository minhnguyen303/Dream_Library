<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function pageLogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], ($request->remember) ? true : false)) {
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->withInput()->withErrors([
            'password' => 'Mật khẩu không chính xác!',
        ]);
    }
}
