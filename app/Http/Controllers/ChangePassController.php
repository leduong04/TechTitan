<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassController extends Controller
{
    public function showchange()
    {
        $user = Auth::user();

        return view('/User/change_password', compact('user'));

    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();

    $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8|confirmed',
    ]);

    if (Hash::check($request->current_password, $user->password)) {
        $newHashedPassword = password_hash($request->new_password, PASSWORD_DEFAULT);

        $user->update([
            'password' => $newHashedPassword,
        ]);

        return redirect()->route('user.change_password')->with('success', 'Password changed successfully.');
    } else {
        return redirect()->back()->with('error', 'Current password is incorrect.');
    }
    }
}
