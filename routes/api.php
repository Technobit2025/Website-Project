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
 * 
 **/

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\V1\Auth\AuthController;
use App\Http\Controllers\API\V1\User\UserController;
use App\Http\Controllers\API\V1\Auth\AndroidForgotPasswordController;
use App\Http\Controllers\API\V1\Auth\AndroidResetPasswordController;
use App\Http\Controllers\API\V1\Auth\AndroidVerifyOtpController;
use App\Http\Controllers\API\V1\User\ProfileController;
use App\Http\Controllers\API\V1\Auth\AndroidChangePasswordController;
use App\Http\Controllers\API\V1\Company\AndroidJadwalPatroliController;
use App\Http\Controllers\API\V1\Company\CompanyAttendanceController;
use App\Http\Controllers\API\V1\Company\AndroidPresensiController;
use App\Http\Controllers\API\V1\Company\AndroidHistoryAttendanceController;


// API Route
Route::prefix('v1')->name('api.v1.')->group(function () {
    // AUTHENTICATION
    Route::post('login', [AuthController::class, 'login'])->middleware('guest')->name('login');

    // WITH MIDDLEWARE
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');

        // user routes (harus login)
        Route::name('user.')->group(function () {
            Route::get('user', [UserController::class, 'show'])->name('show'); // ambil user yang login
            Route::get('users', [UserController::class, 'index'])->name('index'); // ambil semua user
            Route::post('user', [UserController::class, 'store'])->name('store'); // buat user baru
            Route::put('user', [UserController::class, 'update'])->name('update'); // update user
            Route::delete('user', [UserController::class, 'destroy'])->name('destroy'); // hapus user
        });

        // PROFILE
        Route::name('profile.')->group(function () {
            Route::get('profile/user', [ProfileController::class, 'getUserProfile'])->name('getUserProfile'); // ambil user yang login
            Route::get('profile/employee', [ProfileController::class, 'getEmployeeProfile'])->name('getEmployeeProfile'); // ambil employee yang login
            Route::put('profile/user', [ProfileController::class, 'updateUserProfile'])->name('updateUserProfile'); // update user
            Route::put('profile/employee', [ProfileController::class, 'updateEmployeeProfile'])->name('updateEmployeeProfile'); // update employee
        });

        // ATTENDANCE
        Route::name('attendance.')->group(function () {
            Route::post('check-in', [CompanyAttendanceController::class, 'checkIn'])->name('checkIn'); // check-in
            Route::post('check-out', [CompanyAttendanceController::class, 'checkOut'])->name('checkOut'); // check-out
        });
    });

    // --- Mulai Baris Kode Android -----
    //test

    // FORGOT PASSWORD
    Route::prefix('android')->name('android.')->group(function () {
        Route::post('forgot-password', [AndroidForgotPasswordController::class, 'forgotPassword']);
        Route::post('reset-password', [AndroidResetPasswordController::class, 'resetPassword']);
        Route::post('request-otp', [AndroidForgotPasswordController::class, 'requestOtp']);
        Route::post('verify-otp', [AndroidVerifyOtpController::class, 'verifyOtp']);

        // --- PENGGUNA HARUS LOGIN ----
        Route::middleware('auth:sanctum')->group(function () {
            Route::put('change-password', [AndroidChangePasswordController::class, 'changePassword']);
            Route::post('presensi', [AndroidPresensiController::class, 'store']);
            Route::get('jadwal-patroli', [AndroidJadwalPatroliController::class, 'getJadwalPatroli']);
            Route::get('history-presensi', [AndroidHistoryAttendanceController::class, 'index']);

        });
    });

    // Route::name('attendance.')->group(function () {
    //     Route::post('check-in', [CompanyAttendanceController::class, 'checkIn'])->name('checkIn'); // check-in
    //     Route::post('check-out', [CompanyAttendanceController::class, 'checkOut'])->name('checkOut'); // check-out
    // });





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
