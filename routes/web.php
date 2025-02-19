<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// AUTHENTICATION
use App\Http\Controllers\Auth\LoginController;

// Human Resource
use App\Http\Controllers\HumanResource\HomeController as HumanResourceHome;

Route::get('/', function () {
    return redirect()->route('login.index');
});

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

// Human Resource
Route::group(['prefix' => 'humanresource', 'as' => 'humanresource.'], function () {
    Route::get('/', [HumanResourceHome::class, 'index'])->name('home');
});