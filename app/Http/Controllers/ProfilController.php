<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pembeli;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('authcheck');
    }

    public function showProfile(Request $request)
    {
        if ($request->session()->has('loginIdPembeli')) {
            $user = Pembeli::find($request->session()->get('loginIdPembeli'));
        } else {
            return redirect('/login')->with('fail', 'You have to login first.');
        }

        return view('profil', ['user' => $user]);
    }
}