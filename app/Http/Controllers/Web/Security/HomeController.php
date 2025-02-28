<?php

namespace App\Http\Controllers\Web\Security;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('security.index');
    }
}
