<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeShiftSchedule extends Model
{
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function partner()
    {
        return $this->belongsTo(Employee::class, 'partner_employee_id');
    }

    public function shift()
    {
        return $this->belongsTo(CompanyShift::class, 'company_shift_id');
    }
}
