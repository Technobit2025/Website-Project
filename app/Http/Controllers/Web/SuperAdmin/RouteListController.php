<?php

namespace App\Http\Controllers\Web\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class RouteListController extends Controller
{
    public function index()
    {
        $webRoutes = collect(Route::getRoutes())->filter(function ($route) {
            return !str_starts_with($route->uri, 'api/');
        });
        $apiRoutes = collect(Route::getRoutes())->filter(function ($route) {
            return str_starts_with($route->uri, 'api/');
        });
        return view('super_admin.route_list.index', compact('webRoutes', 'apiRoutes'));
    }
}
