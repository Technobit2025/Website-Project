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
}
