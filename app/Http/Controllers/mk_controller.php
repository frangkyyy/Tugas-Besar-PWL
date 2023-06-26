<?php

namespace App\Http\Controllers;

use App\mata_kuliah;
use App\program_studi;
use Illuminate\Http\Request;

class mk_controller extends Controller
{
    public function index()
    {
        $psid = auth()->user()->program_studi_id;
            $matakuliah = mata_kuliah::where('program_studi_id', $psid)->get();
        return view('matakuliah', compact('matakuliah'));
    }
}
