<?php

/**
 * Dokumentasi dan Aturan Penulisan Route
 *
 * 1. Penulisan nama alias Class Controller
 *    Gunakan format RoleFitur untuk penamaan alias controller.
 *    Contoh: jika controller tersebut mengelola fitur home untuk role SuperAdmin,
 *    maka penamaannya adalah SuperAdminHome. Pastikan untuk mengikuti konvensi ini
 *    agar mudah dikenali dan dikelompokkan berdasarkan peran.
 *
 * 2. Menambah Route untuk Role Baru
 *    Ketika menambahkan route untuk role baru, gunakan format berikut:
 *
 *    Route::group(['prefix' => 'role', 'as' => 'role.', 'middleware' => ['auth', 'can:isRole']], function () {
 *      Route::get('/', [RoleHome::class, 'index'])->name('home');
 *        // Di sini, Kamu dapat menambahkan semua grup fitur lainnya yang relevan untuk role ini.
 *    });
 *
 * 3. Menambah Fitur di Dalam Route Role
 *    Jika Kamu ingin menambahkan fitur di dalam route untuk role tertentu,
 *    gunakan format berikut:
 *
 *    Route::prefix('fiture')->name('fiture.')->group(function () {
 *        // Definisikan semua metode HTTP yang diperlukan seperti get, post, put, delete
 *    });
 *
 * 4. Format penulisan (PENTING!!!)
 *
 *  Route::prefix('lowercase')->name('lowercase.')->middleware(['auth'],['can:isPascalCase'])->group(function () {
 *      Route::get('/', [PascalCase::class, 'camelCase'])->name('kebab-case');
 *      Route::put('lowercase/{camelCase}', [PascalCase::class, 'camelCase'])->name('kebab-case');
 *  });
 */

use Illuminate\Support\Facades\Route;

// AUTHENTICATION
use App\Http\Controllers\Auth\LoginController;

// GLOBAL
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;

// HUMAN RESOURCE
use App\Http\Controllers\HumanResource\HomeController as HumanResourceHome;
use App\Http\Controllers\HumanResource\EmployeeController as HumanResourceEmployee;

Route::get('/', function () {
    return redirect()->route('login');
});

// AUTHENTICATION
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.login');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

// GLOBAL
Route::get('/dashboard', [MainController::class, 'index'])->middleware('auth')->name('dashboard');
// PROFILE
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    Route::get('/', [ProfileController::class, 'index'])->name('index');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
    Route::put('/update', [ProfileController::class, 'update'])->name('update');
});


// HUMAN RESOURCE
Route::group(['prefix' => 'humanresource', 'as' => 'humanresource.', 'middleware' => ['auth', 'can:isHumanResource']], function () {
    Route::get('/', [HumanResourceHome::class, 'index'])->name('home');

    Route::prefix('employee')->name('employee.')->group(function () {
        Route::get('/', [HumanResourceEmployee::class, 'index'])->name('index');
        Route::get('/show/{employee}', [HumanResourceEmployee::class, 'show'])->name('show');
        Route::get('/create', [HumanResourceEmployee::class, 'create'])->name('create');
        Route::post('/store', [HumanResourceEmployee::class, 'store'])->name('store');
        Route::get('/edit/{employee}', [HumanResourceEmployee::class, 'edit'])->name('edit');
        Route::put('/update/{employee}', [HumanResourceEmployee::class, 'update'])->name('update');
        Route::delete('/destroy/{employee}', [HumanResourceEmployee::class, 'destroy'])->name('destroy');
    });
});
