<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    protected $guarded = [];

    public function payrollPeriod()
    {
        return $this->belongsTo(PayrollPeriod::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function payrollComponent()
    {
        return $this->hasMany(PayrollComponent::class);
    }
}
