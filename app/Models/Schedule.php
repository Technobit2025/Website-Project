<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    // Jika kolom lainnya diperlukan
    protected $fillable = [
        'start_time', 
        'end_time'
    ];

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'schedule_id');
    }
}
