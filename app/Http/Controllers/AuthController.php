<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function loginAction(LoginRequest $request)
    {
        $validated = $request->validated();
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect('/home/dashboard');
        }
        return back()->withErrors([
            'login' => 'Username Atau Password Salah',
        ]);
    }
}