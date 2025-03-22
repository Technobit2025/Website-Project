<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanySchedule extends Model
{
    protected $guarded = ['id'];

    public function shift()
    {
        $this->belongsTo(CompanyShift::class);
    }
}
