<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyAttendance extends Model
{
    protected $guarded = ['id'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function companyPlace()
    {
        return $this->belongsTo(CompanyPlace::class);
    }
}
