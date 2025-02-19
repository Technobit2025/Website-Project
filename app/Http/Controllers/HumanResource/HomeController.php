<?php

namespace App\Http\Controllers\HumanResource;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('human_resource.index');
    }
}
