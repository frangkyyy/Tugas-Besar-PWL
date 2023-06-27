<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function dashboard()
    {
        return view('prodi.dashboard');
    }
}
