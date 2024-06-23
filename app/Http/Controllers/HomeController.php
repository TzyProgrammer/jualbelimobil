<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;


class HomeController extends Controller
{
        public function home ()
        {
            $mobil = Mobil::orderBy('kode_mobil', 'desc')->take(4)->get();
             return view('home', compact('mobil'));
        }
       
}
