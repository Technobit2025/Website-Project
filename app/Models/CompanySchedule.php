<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanySchedule extends Model
{
    protected $guarded = ['id'];

    public function shift()
    {
        return $this->belongsTo(CompanyShift::class);
    }
    public function companyShift()
    {
        return $this->belongsTo(CompanyShift::class);
    }
}
