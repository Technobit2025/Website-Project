<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    /**
     * Accessor untuk mengubah kolom logo menjadi URL.
     */
    public function getLogoAttribute($value)
    {
        if (!empty($value) && !is_null($value)) {
            return asset("storage/company/logo/" . $value);
        }

        // Fallback jika logo kosong atau null
        return asset("storage/company/logo/default.png");
    }
}
