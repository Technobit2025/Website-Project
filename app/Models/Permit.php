<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permit extends Model
{
    protected $guarded = [];

    protected $casts = [
        'employeeIsConfirmed' => 'boolean',
        'alternateIsConfirmed' => 'boolean',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, "employee_id");
    }
    public function alternate()
    {
        return $this->belongsTo(Employee::class, "alternate_id");
    }

    public function employeeCompanySchedule()
    {
        return $this->belongsTo(CompanySchedule::class, "employee_schedule_id");
    }
    public function alternateCompanySchedule()
    {
        return $this->belongsTo(CompanySchedule::class, "alternate_schedule_id");
    }
    public function employeeCompanyShift()
    {
        if ($this->employeeCompanySchedule) {
            return $this->employeeCompanySchedule->companyShift;
        }
        return null;
    }

    public function alternateCompanyShift()
    {
        if ($this->alternateCompanySchedule) {
            return $this->alternateCompanySchedule->companyShift;
        }
        return null;
    }

    public function employeeShift()
    {
        return $this->employeeCompanySchedule?->companyShift;
    }

    public function alternateShift()
    {
        return $this->alternateCompanySchedule?->companyShift;
    }
}
