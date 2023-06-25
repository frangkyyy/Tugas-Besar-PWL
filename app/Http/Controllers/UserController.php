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
        // Handle photo upload and update the $user->photo field accordingly

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
