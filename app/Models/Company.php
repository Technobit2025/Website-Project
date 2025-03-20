<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];
    public function getLogoAttribute($value)
    {
        if (!empty($value) && !is_null($value)) {
            return asset("storage/company/logo/" . $value);  // Menggunakan helper asset() untuk path file
        }
    }
}
