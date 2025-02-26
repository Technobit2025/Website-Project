<?php

/** 
 * API Route
 *
 * Route ini menyediakan endpoint API untuk mengelola app
 * menggunakan prosedur tersimpan di database.
 *
 * API yang ada:
 * 
 * // AUTHENTICATION
 * - POST api/login             [AuthController][email, password]
 * - POST api/logout            [AuthController][token]
 *
 * // USER
 * - GET api/user               [AuthController][token]
 * - GET api/users              [AuthController][token]
 * 
 **/

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\Auth\AuthController;
use App\Models\User;

Route::name('api.')->group(function () {
    // AUTHENTICATION
    Route::post('login', [AuthController::class, 'login'])->middleware('guest')->name('login');

    // WITH MIDDLEWARE
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('/user', function (Request $request) {
            return $request->user();
        });
        Route::get('users', function (Request $request) {
            return User::all();
        });
    });

    // GLOBAL
    // Route::get('/profile', [ApiController::class, 'profile'])->middleware('auth:sanctum');

    // HUMAN RESOURCE
    // Route::group(['prefix' => 'humanresource', 'as' => 'humanresource.', 'middleware' => ['auth:sanctum', 'can:isHumanResource']], function () {
    //     Route::get('/', [HumanResourceHome::class, 'index'])->name('home');

    //     Route::prefix('employee')->name('employee.')->group(function () {
    //         Route::get('/', [HumanResourceEmployee::class, 'index'])->name('index');
    //         Route::get('/show/{employee}', [HumanResourceEmployee::class, 'show'])->name('show');
    //         Route::get('/create', [HumanResourceEmployee::class, 'create'])->name('create');
    //         Route::post('/store', [HumanResourceEmployee::class, 'store'])->name('store');
    //         Route::get('/edit/{employee}', [HumanResourceEmployee::class, 'edit'])->name('edit');
    //         Route::put('/update/{employee}', [HumanResourceEmployee::class, 'update'])->name('update');
    //         Route::delete('/destroy/{employee}', [HumanResourceEmployee::class, 'destroy'])->name('destroy');
    //     });
    // });
});
