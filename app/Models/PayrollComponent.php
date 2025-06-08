<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PayrollComponent extends Model
{
    protected $guarded = [];

    public function payrolls()
    {
        return $this->hasMany(Payroll::class);
    }
     public function payroll()
    {
        return $this->belongsTo(Payroll::class, 'payroll_id');
    }
}
