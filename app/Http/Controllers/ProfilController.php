<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function edit()
    {
        $user = auth()->user(); // Ambil data pengguna yang sedang login
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user(); // Ambil data pengguna yang sedang login
        $user->update($request->all());

        return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui.');
    }
}
