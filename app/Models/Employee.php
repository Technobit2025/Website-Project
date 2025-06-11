<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = [];
    // protected $fillable = [
    //     'user_id',
    //     'schedule_id', // Pastikan schedule_id termasuk dalam atribut yang dapat diisi
    //     // atribut lain
    //     'company_id',
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function payrolls(): HasMany
    {
        return $this->hasMany(Payroll::class);
    }

    public function payrollInPayrollPeriod($payrollPeriodId)
    {
        return $this->payrolls()->where('payroll_period_id', $payrollPeriodId)->first();
    }
    public function shiftSchedules()
    {
        return $this->hasMany(EmployeeShiftSchedule::class);
    }
}
