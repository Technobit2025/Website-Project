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
 *      Route::get('', [RoleHome::class, 'index'])->name('home');
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
 *      Route::get('', [PascalCase::class, 'camelCase'])->name('kebab-case');
 *      Route::put('lowercase/{camelCase}', [PascalCase::class, 'camelCase'])->name('kebab-case');
 *  });
 */

// MODULE
use Illuminate\Support\Facades\Route;

// AUTHENTICATION
use App\Http\Controllers\Web\Auth\AuthController;
use App\Http\Controllers\Web\Auth\ForgotPasswordController;

// GLOBAL
use App\Http\Controllers\Web\MainController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\PresenceController;
use App\Http\Controllers\Web\AttendanceController;
use App\Http\Controllers\Web\PermitController;
use App\Http\Controllers\Web\ScheduleController;

// SUPER ADMIN
use App\Http\Controllers\Web\SuperAdmin\HomeController as SuperAdminHome;
use App\Http\Controllers\Web\SuperAdmin\LogViewerController as SuperAdminLogViewer;
use App\Http\Controllers\Web\SuperAdmin\RouteListController as SuperAdminRouteList;
use App\Http\Controllers\Web\SuperAdmin\PerformanceController as SuperAdminPerformance;
use App\Http\Controllers\Web\SuperAdmin\DatabaseController as SuperAdminDatabase;
use App\Http\Controllers\Web\SuperAdmin\EmployeeController as SuperAdminEmployee;
use App\Http\Controllers\Web\SuperAdmin\CompanyController as SuperAdminCompany;
use App\Http\Controllers\Web\SuperAdmin\ApiTestController as SuperAdminApiTest;
use App\Http\Controllers\Web\SuperAdmin\FolderController as SuperAdminFolder;
use App\Http\Controllers\Web\SuperAdmin\EnvController as SuperAdminEnv;
use App\Http\Controllers\Web\SuperAdmin\CompanyShiftController as SuperAdminCompanyShift;
use App\Http\Controllers\Web\SuperAdmin\CompanyScheduleController as SuperAdminCompanySchedule;
use App\Http\Controllers\Web\SuperAdmin\CompanyAttendanceController as SuperAdminCompanyAttendance;
use App\Http\Controllers\Web\SuperAdmin\CompanyPlaceController as SuperAdminCompanyPlace;
use App\Http\Controllers\Web\SuperAdmin\PermitController as SuperAdminPermit;
use App\Http\Controllers\Web\SuperAdmin\PatrolController as SuperAdminPatrol;

use App\Http\Controllers\Web\SuperAdmin\PayrollPeriodController as SuperAdminPayrollPeriod;
use App\Http\Controllers\Web\SuperAdmin\PayrollController as SuperAdminPayroll;
use App\Http\Controllers\Web\SuperAdmin\PayrollComponentController as SuperAdminPayrollComponent;

// HUMAN RESOURCE
use App\Http\Controllers\Web\HumanResource\HomeController as HumanResourceHome;
use App\Http\Controllers\Web\HumanResource\EmployeeController as HumanResourceEmployee;

// EMPLOYEE
use App\Http\Controllers\Web\Employee\HomeController as EmployeeHome;

// SECURITY
use App\Http\Controllers\Web\Security\HomeController as SecurityHome;

// BENDAHARA
use App\Http\Controllers\Web\Treasurer\HomeController as BendaharaHome;
use App\Http\Controllers\Web\Treasurer\EmployeeController as BendaharaEmployee;

// COMPANY
use App\Http\Controllers\Web\Company\HomeController as CompanyHome;
use App\Http\Controllers\Web\Company\CompanyController as CompanyCompany;
use App\Http\Controllers\Web\Company\CompanyShiftController as CompanyCompanyShift;
use App\Http\Controllers\Web\Company\CompanyScheduleController as CompanyCompanySchedule;
use App\Http\Controllers\Web\Company\CompanyPlaceController as CompanyCompanyPlace;

// DANRU
use App\Http\Controllers\Web\Danru\HomeController as DanruHome;
use App\Http\Controllers\Web\Danru\CompanyController as DanruCompany;
use App\Http\Controllers\Web\Danru\CompanyScheduleController as DanruCompanySchedule;
use App\Http\Controllers\Web\Danru\PermitController as DanruPermit;
use App\Http\Controllers\Web\Danru\PatrolController as DanruPatrol;

// INDEX REDIRECT TO LOGIN
Route::get('/', function () {
    return redirect()->route('login');
});

// ERROR TEST
Route::get('error-test/{code}', function ($code) {
    return abort($code);
});

// AUTHENTICATION
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.login');
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('forgot-password', [ForgotPasswordController::class, 'index'])->middleware('guest')->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'email'])->middleware('guest')->name('password.email');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'reset'])->middleware('guest')->name('password.reset');
Route::post('reset-password', [ForgotPasswordController::class, 'update'])->middleware('guest')->name('password.update');

// PROFILE
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    Route::get('/', [ProfileController::class, 'index'])->name('index');
    Route::put('update', [ProfileController::class, 'update'])->name('update');

    Route::put('update-employee', [ProfileController::class, 'updateEmployee'])->name('update-employee');
    Route::put('update-photo', [ProfileController::class, 'updatePhoto'])->name('update-photo');
});

// ATTENDANCE
Route::prefix('attendance')->name('attendance.')->middleware(['auth'])->group(function () {
    Route::get('/', [AttendanceController::class, 'index'])->name('index');
    Route::post('check-in', [AttendanceController::class, 'checkIn'])->name('checkIn');
    Route::post('check-out', [AttendanceController::class, 'checkOut'])->name('checkOut');
});
// PERMIT
Route::prefix('permit')->name('permit.')->middleware(['auth'])->group(function () {
    Route::get('/', [PermitController::class, 'index'])->name('index');
    Route::get('create', [PermitController::class, 'create'])->name('create');
    Route::post('store', [PermitController::class, 'store'])->name('store');
    Route::get('show/{permit}', [PermitController::class, 'show'])->name('show');
    Route::get('confirmation/{permit}', [PermitController::class, 'confirmation'])->name('confirmation');
    Route::put('confirm/{permit}', [PermitController::class, 'confirm'])->name('confirm');
    Route::delete('destroy/{permit}', [PermitController::class, 'destroy'])->name('destroy');
});
// ALTERNATE
Route::prefix('alternation')->name('alternation.')->middleware(['auth'])->group(function () {
    Route::get('/', [PermitController::class, 'alternationIndex'])->name('index');
    Route::get('show/{permit}', [PermitController::class, 'alternationShow'])->name('show');
    Route::put('confirm/{permit}', [PermitController::class, 'alternationConfirm'])->name('confirm');
});
// SCHEDULE
Route::prefix('schedule')->name('schedule.')->middleware(['auth'])->group(function () {
    Route::get('/', [ScheduleController::class, 'index'])->name('index');
});

// SUPER ADMIN
Route::group(['prefix' => 'superadmin', 'as' => 'superadmin.', 'middleware' => ['auth', 'can:isSuperAdmin']], function () {
    Route::get('/', [SuperAdminHome::class, 'index'])->name('home');

    // COMPANY
    Route::prefix('company')->name('company.')->group(function () {
        Route::get('/', [SuperAdminCompany::class, 'index'])->name('index');
        Route::get('show/{company}', [SuperAdminCompany::class, 'show'])->name('show');
        Route::get('create', [SuperAdminCompany::class, 'create'])->name('create');
        Route::post('store', [SuperAdminCompany::class, 'store'])->name('store');
        Route::get('edit/{company}', [SuperAdminCompany::class, 'edit'])->name('edit');
        Route::put('update/{company}', [SuperAdminCompany::class, 'update'])->name('update');
        Route::delete('destroy/{company}', [SuperAdminCompany::class, 'destroy'])->name('destroy');

        Route::prefix('employee')->name('employee.')->group(function () {
            Route::get('employee/{companyId}', [SuperAdminCompany::class, 'employeeIndex'])->name('index');
            Route::post('employee/{companyId}/store', [SuperAdminCompany::class, 'employeeStore'])->name('store');
            Route::delete('employee/{companyId}/{employee}', [SuperAdminCompany::class, 'employeeDestroy'])->name('destroy');
        });

        Route::prefix('shift')->name('shift.')->group(function () {
            Route::get('/{company}', [SuperAdminCompanyShift::class, 'index'])->name('index');
            Route::get('create/{company}', [SuperAdminCompanyShift::class, 'create'])->name('create');
            Route::post('store', [SuperAdminCompanyShift::class, 'store'])->name('store');
            Route::get('show/{companyShift}', [SuperAdminCompanyShift::class, 'show'])->name('show');
            Route::get('edit/{companyShift}', [SuperAdminCompanyShift::class, 'edit'])->name('edit');
            Route::put('update/{companyShift}', [SuperAdminCompanyShift::class, 'update'])->name('update');
            Route::delete('destroy/{companyShift}', [SuperAdminCompanyShift::class, 'destroy'])->name('destroy');
        });
        Route::prefix('schedule')->name('schedule.')->group(function () {
            Route::get('/{company}', [SuperAdminCompanySchedule::class, 'index'])->name('index');
            Route::post('save', [SuperAdminCompanySchedule::class, 'save'])->name('save');
            Route::post('destroy', [SuperAdminCompanySchedule::class, 'destroy'])->name('destroy');
        });

        Route::prefix('attendance')->name('attendance.')->group(function () {
            Route::get('/{company}', [SuperAdminCompanyAttendance::class, 'index'])->name('index');
            Route::post('save', [SuperAdminCompanyAttendance::class, 'save'])->name('save');
            Route::post('destroy', [SuperAdminCompanyAttendance::class, 'destroy'])->name('destroy');
        });

        Route::prefix('place')->name('place.')->group(function () {
            Route::get('/{company}', [SuperAdminCompanyPlace::class, 'index'])->name('index');
            Route::get('create/{company}', [SuperAdminCompanyPlace::class, 'create'])->name('create');
            Route::post('store/{company}', [SuperAdminCompanyPlace::class, 'store'])->name('store');
            Route::get('show/{companyPlace}', [SuperAdminCompanyPlace::class, 'show'])->name('show');
            Route::get('edit/{companyPlace}', [SuperAdminCompanyPlace::class, 'edit'])->name('edit');
            Route::put('update/{companyPlace}', [SuperAdminCompanyPlace::class, 'update'])->name('update');
            Route::delete('destroy/{companyPlace}', [SuperAdminCompanyPlace::class, 'destroy'])->name('destroy');

            Route::get('print-qr-code/{companyPlace}', [SuperAdminCompanyPlace::class, 'printQrCode'])->name('printQrCode');
        });
        Route::prefix('attendanceSecurity')->name('attendanceSecurity.')->group(function () {
            Route::get('/{company}',[SuperAdminCompanyAttendance::class,'indexSecurity'])->name('index');
            Route::get('edit/{attendance}',[SuperAdminCompanyAttendance::class, 'editSecurity'])->name('edit');
            Route::put('update/{attendance}', [SuperAdminCompanyAttendance::class, 'updateSecurity'])->name('update');
        });
    });

    // EMPLOYEE
    Route::prefix('employee')->name('employee.')->group(function () {
        Route::get('/', [SuperAdminEmployee::class, 'index'])->name('index');
        Route::get('show/{employee}', [SuperAdminEmployee::class, 'show'])->name('show');
        Route::get('create', [SuperAdminEmployee::class, 'create'])->name('create');
        Route::post('store', [SuperAdminEmployee::class, 'store'])->name('store');
        Route::get('edit/{employee}', [SuperAdminEmployee::class, 'edit'])->name('edit');
        Route::put('update/{employee}', [SuperAdminEmployee::class, 'update'])->name('update');
        Route::delete('destroy/{employee}', [SuperAdminEmployee::class, 'destroy'])->name('destroy');
    });

    // EMPLOYEE SALARY
    Route::prefix('employee-salary')->name('employeesalary.')->group(function () {
        Route::get('/', [SuperAdminEmployee::class, 'salaryIndex'])->name('index');
        Route::get('show/{employee}', [SuperAdminEmployee::class, 'salaryShow'])->name('show');
        Route::get('create/{employee}', [SuperAdminEmployee::class, 'salaryCreate'])->name('create');
        Route::post('store/{employee}', [SuperAdminEmployee::class, 'salaryStore'])->name('store');
        Route::get('edit/{employee}', [SuperAdminEmployee::class, 'salaryEdit'])->name('edit');
        Route::put('update/{employee}', [SuperAdminEmployee::class, 'salaryUpdate'])->name('update');
        Route::delete('destroy/{employee}', [SuperAdminEmployee::class, 'salaryDestroy'])->name('destroy');
    });

    // PATROL
    Route::prefix('patrol')->name('patrol.')->group(function(){
        Route::get('/',[SuperAdminPatrol::class,'index'])->name('index');
        Route::get('/export-pdf',[SuperAdminPatrol::class,'exportPdf'])->name('exportPdf');
        Route::get('edit/{patrol}',[SuperAdminPatrol::class, 'edit'])->name('edit');
        Route::put('update/{patrol}', [SuperAdminPatrol::class, 'update'])->name('update');

    });    

    // PAYROLL
    Route::prefix('payroll')->name('payroll.')->group(function () {
        // PAYROLL PERIOD
        Route::prefix('period')->name('period.')->group(function () {
            Route::get('/', [SuperAdminPayrollPeriod::class, 'index'])->name('index');
            Route::post('store', [SuperAdminPayrollPeriod::class, 'store'])->name('store');
            Route::put('update/{payrollPeriod}', [SuperAdminPayrollPeriod::class, 'update'])->name('update');
            Route::delete('destroy/{payrollPeriod}', [SuperAdminPayrollPeriod::class, 'destroy'])->name('destroy');
        });

        // PAYROLL
        Route::get('/{payrollPeriod}', [SuperAdminPayroll::class, 'index'])->name('index');
        Route::post('store', [SuperAdminPayroll::class, 'store'])->name('store');
        Route::put('update/{payroll}', [SuperAdminPayroll::class, 'update'])->name('update');
        Route::delete('destroy/{payroll}', [SuperAdminPayroll::class, 'destroy'])->name('destroy');

        // PAYROLL COMPONENT
        Route::prefix('component')->name('component.')->group(function () {
            Route::get('/{payroll}', [SuperAdminPayrollComponent::class, 'index'])->name('index');
            Route::post('store/{payroll}', [SuperAdminPayrollComponent::class, 'store'])->name('store');
        });
    });

    // TOOLS
    Route::prefix('logviewer')->name('logs.')->group(function () {
        Route::get('/', [SuperAdminLogViewer::class, 'index'])->name('index');
        Route::get('show/{filename}', [SuperAdminLogViewer::class, 'show'])->name('show');
        Route::delete('delete/{filename}', [SuperAdminLogViewer::class, 'destroy'])->name('destroy');
        Route::get('download/{filename}', [SuperAdminLogViewer::class, 'download'])->name('download');
    });
    Route::prefix('routelist')->name('routelist.')->group(function () {
        Route::get('/', [SuperAdminRouteList::class, 'index'])->name('index');
    });
    Route::prefix('performance')->name('performance.')->group(function () {
        Route::get('/', [SuperAdminPerformance::class, 'index'])->name('index');
    });
    Route::prefix('database')->name('database.')->group(function () {
        Route::get('/', [SuperAdminDatabase::class, 'index'])->name('index');
        Route::get('database', [SuperAdminDatabase::class, 'indexDatabase'])->name('index-database');
        Route::get('indexsql', [SuperAdminDatabase::class, 'indexSql'])->name('index-sql');
        Route::post('sql', [SuperAdminDatabase::class, 'sql'])->name('sql');
        Route::get('show/{tableName}', [SuperAdminDatabase::class, 'showTable'])->name('show');
        Route::post('store/{tableName}', [SuperAdminDatabase::class, 'store'])->name('store');
        Route::put('update/{tableName}/{id}', [SuperAdminDatabase::class, 'update'])->name('update');
        Route::delete('destroy/{tableName}/{id}', [SuperAdminDatabase::class, 'destroy'])->name('destroy');
        Route::delete('empty/{tableName}', [SuperAdminDatabase::class, 'empty'])->name('empty');
    });
    // API TEST
    Route::prefix('api-test')->name('apitest.')->group(function () {
        Route::get('/', [SuperAdminApiTest::class, 'index'])->name('index');
        Route::post('test', [SuperAdminApiTest::class, 'test'])->name('test');
    });
    // FILE MANAGER
    Route::prefix('folder')->name('folder.')->group(function () {
        Route::get('/', [SuperAdminFolder::class, 'index'])->name('index');
        Route::get('folders', [SuperAdminFolder::class, 'folders'])->name('folders');
    });

    // ENV
    Route::prefix('env')->name('env.')->group(function () {
        Route::get('/', [SuperAdminEnv::class, 'index'])->name('index');
        Route::put('update', [SuperAdminEnv::class, 'update'])->name('update');
    });

    Route::prefix('permit')->name('permit.')->middleware(['auth'])->group(function () {
        Route::get('/', [SuperAdminPermit::class, 'index'])->name('index');
        Route::get('show/{permit}', [SuperAdminPermit::class, 'show'])->name('show');
        Route::put('confirm/{permit}', [SuperAdminPermit::class, 'confirm'])->name('confirm');
    });
});

// HUMAN RESOURCE
Route::group(['prefix' => 'humanresource', 'as' => 'humanresource.', 'middleware' => ['auth', 'can:isHumanResource']], function () {
    Route::get('/', [HumanResourceHome::class, 'index'])->name('home');

    // EMPLOYEE
    Route::prefix('employee')->name('employee.')->group(function () {
        Route::get('/', [HumanResourceEmployee::class, 'index'])->name('index');
        Route::get('show/{employee}', [HumanResourceEmployee::class, 'show'])->name('show');
        Route::get('create', [HumanResourceEmployee::class, 'create'])->name('create');
        Route::post('store', [HumanResourceEmployee::class, 'store'])->name('store');
        Route::get('edit/{employee}', [HumanResourceEmployee::class, 'edit'])->name('edit');
        Route::put('update/{employee}', [HumanResourceEmployee::class, 'update'])->name('update');
        Route::delete('destroy/{employee}', [HumanResourceEmployee::class, 'destroy'])->name('destroy');
    });

    // EMPLOYEE SALARY
    Route::prefix('employee-salary')->name('employeesalary.')->group(function () {
        Route::get('/', [HumanResourceEmployee::class, 'salaryIndex'])->name('index');
        Route::get('show/{employee}', [HumanResourceEmployee::class, 'salaryShow'])->name('show');
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

// TREASURER
Route::group(['prefix' => 'treasurer', 'as' => 'treasurer.', 'middleware' => ['auth', 'can:isTreasurer']], function () {
    Route::get('/', [BendaharaHome::class, 'index'])->name('home');

    // EMPLOYEE SALARY
    Route::prefix('employee-salary')->name('employeesalary.')->group(function () {
        Route::get('/', [BendaharaEmployee::class, 'salaryIndex'])->name('index');
        Route::get('show/{employee}', [BendaharaEmployee::class, 'salaryShow'])->name('show');
        Route::get('create/{employee}', [BendaharaEmployee::class, 'salaryCreate'])->name('create');
        Route::post('store/{employee}', [BendaharaEmployee::class, 'salaryStore'])->name('store');
        Route::get('edit/{employee}', [BendaharaEmployee::class, 'salaryEdit'])->name('edit');
        Route::put('update/{employee}', [BendaharaEmployee::class, 'salaryUpdate'])->name('update');
        Route::delete('destroy/{employee}', [BendaharaEmployee::class, 'salaryDestroy'])->name('destroy');
    });
});

// COMPANY
Route::group(['prefix' => 'company', 'as' => 'company.', 'middleware' => ['auth', 'can:isCompany']], function () {
    Route::get('/', [CompanyHome::class, 'index'])->name('home');
    // Route::get('/', [SuperAdminCompany::class, 'index'])->name('index');
    // Route::get('show/{company}', [SuperAdminCompany::class, 'show'])->name('show');
    // Route::get('create', [SuperAdminCompany::class, 'create'])->name('create');
    // Route::post('store', [SuperAdminCompany::class, 'store'])->name('store');
    // Route::get('edit/{company}', [SuperAdminCompany::class, 'edit'])->name('edit');
    // Route::put('update/{company}', [SuperAdminCompany::class, 'update'])->name('update');
    // Route::delete('destroy/{company}', [SuperAdminCompany::class, 'destroy'])->name('destroy');

    Route::prefix('employee')->name('employee.')->group(function () {
        Route::get('/', [CompanyCompany::class, 'employeeIndex'])->name('index');
        // Route::post('store', [CompanyCompany::class, 'employeeStore'])->name('store');
        Route::delete('destroy/{employee}', [CompanyCompany::class, 'employeeDestroy'])->name('destroy');
    });
    Route::prefix('shift')->name('shift.')->group(function () {
        Route::get('/', [CompanyCompanyShift::class, 'index'])->name('index');
        Route::get('create', [CompanyCompanyShift::class, 'create'])->name('create');
        Route::post('store', [CompanyCompanyShift::class, 'store'])->name('store');
        Route::get('show/{companyShift}', [CompanyCompanyShift::class, 'show'])->name('show');
        Route::get('edit/{companyShift}', [CompanyCompanyShift::class, 'edit'])->name('edit');
        Route::put('update/{companyShift}', [CompanyCompanyShift::class, 'update'])->name('update');
        Route::delete('destroy/{companyShift}', [CompanyCompanyShift::class, 'destroy'])->name('destroy');
    });
    Route::prefix('schedule')->name('schedule.')->group(function () {
        Route::get('/', [CompanyCompanySchedule::class, 'index'])->name('index');
        Route::post('save', [CompanyCompanySchedule::class, 'save'])->name('save');
        Route::post('destroy', [CompanyCompanySchedule::class, 'destroy'])->name('destroy');
    });

    Route::prefix('place')->name('place.')->group(function () {
        Route::get('/', [CompanyCompanyPlace::class, 'index'])->name('index');
        Route::get('create', [CompanyCompanyPlace::class, 'create'])->name('create');
        Route::post('store', [CompanyCompanyPlace::class, 'store'])->name('store');
        Route::get('show/{companyPlace}', [CompanyCompanyPlace::class, 'show'])->name('show');
        Route::get('edit/{companyPlace}', [CompanyCompanyPlace::class, 'edit'])->name('edit');
        Route::put('update/{companyPlace}', [CompanyCompanyPlace::class, 'update'])->name('update');
        Route::delete('destroy/{companyPlace}', [CompanyCompanyPlace::class, 'destroy'])->name('destroy');
    });
});

// DANRU
Route::group(['prefix' => 'danru', 'as' => 'danru.', 'middleware' => ['auth', 'can:isDanru']], function () {
    Route::get('/', [DanruHome::class, 'index'])->name('home');

    // COMPANY SCHEDULE
    Route::prefix('company')->name('company.')->group(function () {
        Route::get('/', [DanruCompany::class, 'index'])->name('index');
        Route::get('show/{company}', [DanruCompany::class, 'show'])->name('show');

        Route::prefix('schedule')->name('schedule.')->group(function () {
            Route::get('/{company}', [DanruCompanySchedule::class, 'index'])->name('index');
            Route::post('save', [DanruCompanySchedule::class, 'save'])->name('save');
            Route::post('destroy', [DanruCompanySchedule::class, 'destroy'])->name('destroy');
        });
    });

    Route::prefix('permit')->name('permit.')->group(function () {
        Route::get('/', [DanruPermit::class, 'index'])->name('index');
        // Route::post('store', [DanruPermit::class, 'store'])->name('store');
        Route::get('show/{permit}', [DanruPermit::class, 'show'])->name('show');
        Route::put('update/{permit}', [DanruPermit::class, 'update'])->name('update');
        Route::delete('destroy/{permit}', [DanruPermit::class, 'destroy'])->name('destroy');
        Route::get('jadwal/{employee}', [DanruPermit::class, 'getJadwal'])->name('jadwal');
        Route::post('send-mail/{permit}', [DanruPermit::class, 'sendMail'])->name('sendMail');
    });

    Route::prefix('patrol')->name('patrol.')->group(function(){
        Route::get('/',[DanruPatrol::class, 'index'])->name('index');
        Route::get('/export-pdf',[DanruPatrol::class,'exportPdf'])->name('exportPdf');
        Route::get('edit/{patrol}',[DanruPatrol::class, 'edit'])->name('edit');
        Route::put('update/{patrol}', [DanruPatrol::class, 'update'])->name('update');
    });
});
