<?php

namespace App\Http\Controllers\Web\Treasurer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Role;

class HomeController extends Controller
{
    //
    public function index()
    {
        $employees = Employee::all();
        $roles = Role::all()->where('code', '!=', 'super_admin');
        return view('treasurer.index', compact('employees', 'roles'));
    }
}
