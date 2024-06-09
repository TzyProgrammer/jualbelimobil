<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;

class DaftarController extends Controller
{
    public function showDaftarForm()
    {
        return view('auth.daftar');
    }

    public function daftar(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:pembelis',
            'password' => 'required|min:6',
            'nama_pembeli' => 'required',
            'nomor_hp' => 'required'
        ]);

        Pembeli::create([
            'username' => $request->username,
            'password' => ($request->password),
            'nama_pembeli' => $request->nama_pembeli,
            'nomor_hp' => $request->nomor_hp
        ]);

        return redirect('/login')->with('success', 'Registration successful');
    }
}

