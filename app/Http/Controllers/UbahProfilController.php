<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Pembeli;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UbahProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('authcheck');
    }

    public function showEditProfileForm(Request $request)
    {
        if ($request->session()->has('loginIdPembeli')) {
            $user = Pembeli::find($request->session()->get('loginIdPembeli'));
        } else {
            return redirect('/login')->with('fail', 'You have to login first.');
        }

        return view('ubah_profil', ['user' => $user]);
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'nama_pembeli' => 'nullable|string',
            'alamat' => 'nullable|string',
            'nomor_hp' => 'nullable|string',
            'password' => 'nullable|string|min:6',
            'foto_profil' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($request->session()->has('loginIdPembeli')) {
            $user = Pembeli::find($request->session()->get('loginIdPembeli'));
        } else {
            return redirect('/login')->with('fail', 'You have to login first.');
        }

        $user->nama_pembeli = $request->input('nama_pembeli', $user->nama_pembeli);
        $user->alamat = $request->input('alamat', $user->alamat);
        $user->nomor_hp = $request->input('nomor_hp', $user->nomor_hp);

        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/fotoprofil'), $filename);
            if ($user->foto_profil && Storage::exists('images/fotoprofil/' . $user->foto_profil)) {
                Storage::delete('images/fotoprofil/' . $user->foto_profil);
            }

            $user->foto_profil = $filename;
        }

        $user->save();

        return redirect()->route('profil')->with('success', 'Profile updated successfully.');
    }
}
