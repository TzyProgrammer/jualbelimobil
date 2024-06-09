<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pembeli;
use App\Models\Penjual;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('pembeli')->attempt($credentials)) {
            return redirect()->intended('/home');
        } elseif (Auth::guard('penjual')->attempt($credentials)) {
            return redirect()->intended('/dashboardproduk');
        }

        return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
    }
}

