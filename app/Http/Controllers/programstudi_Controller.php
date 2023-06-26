<?php

namespace App\Http\Controllers;

use App\mk_tawar;
use Illuminate\Http\Request;

class programstudi_Controller extends Controller
{
    public function selectSubjects()
    {
        $mkTawarList = mk_tawar::all(); // Fetch the list of available college subjects

        return view('student.select_subjects', compact('mkTawarList'));
    }

    public function storeSubjectSelection(Request $request)
    {

        return redirect()->back()->with('success', 'Subject selected successfully.');
    }

}
