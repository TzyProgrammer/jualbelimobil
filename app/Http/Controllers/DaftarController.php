<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function showDaftarForm()
    {
        return view('auth.daftar');
    }

    public function daftar(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:pembeli',
            'password' => 'required|min:6',
            'nama_pembeli' => 'required',
            'nomor_hp' => 'required',
            'alamat' => 'required'
        ]);

        Pembeli::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'nama_pembeli' => $request->nama_pembeli,
            'nomor_hp' => $request->nomor_hp,
            'alamat' => $request->alamat,
            'foto_profil' => ''
            
        ]);

        return redirect('/login')->with('success', 'Registration successful');
    }
}

