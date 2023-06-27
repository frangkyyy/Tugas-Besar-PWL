<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function editProfile()
    {
        $user = Auth::user();
        return view('edit_profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->alamat = $request->input('alamat');
        $user->nohp = $request->input('nohp');
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = $user->id . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('images'), $filename);
            $user->photo = $filename;
        }
        $user->save();
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
