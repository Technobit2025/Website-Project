<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function payrolls()
    {
        return $this->hasMany(Payroll::class);
    }

    public function payrollInPayrollPeriod($payrollPeriodId)
    {
        return $this->payrolls()->where('payroll_period_id', $payrollPeriodId)->first();
    }

}
