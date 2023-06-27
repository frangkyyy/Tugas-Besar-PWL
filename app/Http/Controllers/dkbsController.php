<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dkbsController extends Controller
{
    public static function dkbs()
    {
        $periods = [
            'Reguler Ganjil 2021/2022',
            'Reguler Genap 2021/2022',
            'Antara Genap 2021/2022',
            'Reguler Ganjil 2022/2023',
            'Reguler Genap 2022/2023',
        ];

        return view('education_periods')->with('periods', $periods);
    }
}
