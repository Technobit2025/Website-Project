<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patrol extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'shift_id',
        'place_id',
        'patrol_location',
        'status',
        'catatan',
        'photo',
        'reviewed_by',
        'reviewed_at',
        'latitude',
        'longitude',

    ];

    public function employee()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }

    public function shift()
    {
        return $this->belongsTo(CompanyShift::class, 'shift_id');
    }
    public function place()
    {
        return $this->belongsTo(CompanyPlace::class, 'place_id');
    }
}
