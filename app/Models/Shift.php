<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',           // contoh: "Shift Pagi", "Shift Malam"
        'start_time',     // contoh: "08:00:00"
        'end_time',       // contoh: "16:00:00"
    ];

    public function patrols()
    {
        return $this->hasMany(Patrol::class);
    }
}
