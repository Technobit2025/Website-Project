<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function state(): HasMany
    {
        return $this->hasMany(State::class, 'country_id');
    }
}
