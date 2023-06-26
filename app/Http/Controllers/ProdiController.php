<?php

namespace App\Http\Controllers;

use App\mata_kuliah;
use App\mk_tawar;
use App\proyek_pendidikan;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function dashboard()
    {
        return view('prodi.dashboard');
    }

    public function tawarMataKuliah()
    {
        $mataKuliahList = mata_kuliah::all(); // Fetch the list of available subjects
        $proyekPendidikanList = proyek_pendidikan::all(); // Fetch the list of available study periods

        return view('prodi.tawarmk', compact('mataKuliahList', 'proyekPendidikanList'));
    }

    public function storeMataKuliah(Request $request)
    {
        // Validate the form submission
        $validatedData = $request->validate([
            'mata_kuliah_id' => 'required',
            'proyek_pendidikan_id' => 'required',
            'kelas' => 'required',
            'hari' => 'required',
            'jam' => 'required',
            'kuota' => 'required',
        ]);
        $mataKuliahTawar = new mk_tawar();
        $mataKuliahTawar->mata_kuliah_id = $request->input('mata_kuliah_id');
        $mataKuliahTawar->proyek_pendidikan_id = $request->input('proyek_pendidikan_id');
        $mataKuliahTawar->kelas = $request->input('kelas');
        $mataKuliahTawar->hari = $request->input('hari');
        $mataKuliahTawar->jam = $request->input('jam');
        $mataKuliahTawar->kuota = $request->input('kuota');
        $mataKuliahTawar->save();

        return redirect()->back()->with('success', 'Mata Kuliah offered successfully.');
    }
}
