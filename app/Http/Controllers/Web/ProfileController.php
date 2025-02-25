<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('global.profile', compact('user'));
    }

    /**
     * Update the user's profile.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request)
    // {
    //     $user = Auth::user();

    //     $validated = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
    //         'password' => 'nullable|string|min:8|confirmed',
    //     ]);

    //     // Only update password if it's provided
    //     if (isset($validated['password'])) {
    //         $user->password = $validated['password'];
    //     }

    //     $user->name = $validated['name'];
    //     $user->email = $validated['email'];
    //     $user->save();

    //     return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    // }
}
