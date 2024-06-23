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
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::guard('pembeli')->attempt($credentials)) {
            $user = Auth::guard('pembeli')->user();
            $request->session()->put('loginIdPembeli', $user->id_pembeli);
            return redirect()->intended('/home');
        } elseif (Auth::guard('penjual')->attempt($credentials)) {
            $user = Auth::guard('penjual')->user();
            $request->session()->put('loginIdPenjual', $user->id_penjual);
            return redirect()->intended('/dashboard/produk');
        }

        return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        if ($request->session()->has('loginIdPembeli')) {
            $request->session()->forget('loginIdPembeli');
            Auth::guard('pembeli')->logout();
        }

        if ($request->session()->has('loginIdPenjual')) {
            $request->session()->forget('loginIdPenjual');
            Auth::guard('penjual')->logout();
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'You have been logged out.');
    }
}



