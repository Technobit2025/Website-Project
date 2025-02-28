<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('global.profile', compact('user'));
    }

    public function update(UserRequest $request)
    {
        $user = User::find(Auth::user()->id);

        $validated = $request->validated();

        // Cek password lama kalau user mau ganti password
        if (!empty($validated['password'])) {
            if (empty($validated['current_password']) || !Hash::check($validated['current_password'], $user->password)) {
                return back()->withErrors(['current_password' => 'Password lama salah.'])->withInput($request->all());
            }
        } else {
            unset($validated['password']); // Jangan update kalau kosong
        }

        $user->update($validated);

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }

    public function updateEmployee(EmployeeRequest $request, Employee $employee)
    {
        $validated = $request->validated();
        $employee->update($validated);
        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }
}
