<?php

namespace App\Http\Controllers\Web\Danru;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('danru.index');
    }
}
