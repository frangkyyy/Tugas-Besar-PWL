<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();

        return view('dashboard.profile.edit', compact('user'));
    }
    public function update(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // update atribut-atribut lainnya sesuai kebutuhan
        $user->save();

        return redirect()->route('dashboard')->with('success', 'Profil berhasil diperbarui.');
    }
}