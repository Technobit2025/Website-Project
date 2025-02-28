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
use App\Http\Controllers\Web\Auth\AuthController;
use App\Http\Controllers\Web\Auth\ForgotPasswordController;

// GLOBAL
use App\Http\Controllers\Web\MainController;
use App\Http\Controllers\Web\ProfileController;

// SUPER ADMIN
use App\Http\Controllers\Web\SuperAdmin\HomeController as SuperAdminHome;
use App\Http\Controllers\Web\SuperAdmin\LogViewerController as SuperAdminLogViewer;
use App\Http\Controllers\Web\SuperAdmin\RouteListController as SuperAdminRouteList;
use App\Http\Controllers\Web\SuperAdmin\PerformanceController as SuperAdminPerformance;
use App\Http\Controllers\Web\SuperAdmin\DatabaseController as SuperAdminDatabase;
use App\Http\Controllers\Web\SuperAdmin\EmployeeController as SuperAdminEmployee;

// HUMAN RESOURCE
use App\Http\Controllers\Web\HumanResource\HomeController as HumanResourceHome;
use App\Http\Controllers\Web\HumanResource\EmployeeController as HumanResourceEmployee;

// EMPLOYEE
use App\Http\Controllers\Web\Employee\HomeController as EmployeeHome;

// SECURITY
use App\Http\Controllers\Web\Security\HomeController as SecurityHome;

Route::get('/', function () {
    return redirect()->route('login');
});

// AUTHENTICATION
Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest')->name('login.login');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'email'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'reset'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'update'])->middleware('guest')->name('password.update');

// GLOBAL
Route::get('/dashboard', [MainController::class, 'index'])->middleware('auth')->name('dashboard');

// PROFILE
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    Route::get('/', [ProfileController::class, 'index'])->name('index');
    Route::put('/update', [ProfileController::class, 'update'])->name('update');
    
    Route::put('/update-employee', [ProfileController::class, 'updateEmployee'])->name('update-employee');
});

// SUPER ADMIN
Route::group(['prefix' => 'superadmin', 'as' => 'superadmin.', 'middleware' => ['auth', 'can:isSuperAdmin']], function () {
    Route::get('/', [SuperAdminHome::class, 'index'])->name('home');

    // EMPLOYEE
    Route::prefix('employee')->name('employee.')->group(function () {
        Route::get('/', [SuperAdminEmployee::class, 'index'])->name('index');
        Route::get('/show/{employee}', [SuperAdminEmployee::class, 'show'])->name('show');
        Route::get('/create', [SuperAdminEmployee::class, 'create'])->name('create');
        Route::post('/store', [SuperAdminEmployee::class, 'store'])->name('store');
        Route::get('/edit/{employee}', [SuperAdminEmployee::class, 'edit'])->name('edit');
        Route::put('/update/{employee}', [SuperAdminEmployee::class, 'update'])->name('update');
        Route::delete('/destroy/{employee}', [SuperAdminEmployee::class, 'destroy'])->name('destroy');
    });

    // TOOLS
    Route::prefix('logviewer')->name('logs.')->group(function () {
        Route::get('/', [SuperAdminLogViewer::class, 'index'])->name('index');
        Route::get('/show/{filename}', [SuperAdminLogViewer::class, 'show'])->name('show');
        Route::delete('/delete/{filename}', [SuperAdminLogViewer::class, 'destroy'])->name('destroy');
        Route::get('/download/{filename}', [SuperAdminLogViewer::class, 'download'])->name('download');
    });
    Route::prefix('routelist')->name('routelist.')->group(function () {
        Route::get('/', [SuperAdminRouteList::class, 'index'])->name('index');
    });
    Route::prefix('performance')->name('performance.')->group(function () {
        Route::get('/', [SuperAdminPerformance::class, 'index'])->name('index');
    });
    Route::prefix('database')->name('database.')->group(function () {
        Route::get('/', [SuperAdminDatabase::class, 'index'])->name('index');
        Route::get('/database', [SuperAdminDatabase::class, 'indexDatabase'])->name('index-database');
        Route::get('/indexsql', [SuperAdminDatabase::class, 'indexSql'])->name('index-sql');
        Route::post('/sql', [SuperAdminDatabase::class, 'sql'])->name('sql');
        Route::get('/show/{tableName}', [SuperAdminDatabase::class, 'showTable'])->name('show');
        Route::post('/store/{tableName}', [SuperAdminDatabase::class, 'store'])->name('store');
        Route::put('/update/{tableName}/{id}', [SuperAdminDatabase::class, 'update'])->name('update');
        Route::delete('/destroy/{tableName}/{id}', [SuperAdminDatabase::class, 'destroy'])->name('destroy');
        Route::delete('/empty/{tableName}', [SuperAdminDatabase::class, 'empty'])->name('empty');
    });
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

// EMPLOYEE
Route::group(['prefix' => 'employee', 'as' => 'employee.', 'middleware' => ['auth', 'can:isEmployee']], function () {
    Route::get('/', [EmployeeHome::class, 'index'])->name('home');
});

// SECURITY
Route::group(['prefix' => 'security', 'as' => 'security.', 'middleware' => ['auth', 'can:isSecurity']], function () {
    Route::get('/', [SecurityHome::class, 'index'])->name('home');
});