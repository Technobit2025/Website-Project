<?php

namespace App\Http\Controllers\Web\HumanResource;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Role;

class HomeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $roles = Role::all()->where('code', '!=', 'super_admin');
        return view('human_resource.index', compact('employees', 'roles'));
    }
}
