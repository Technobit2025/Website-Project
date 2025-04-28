<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'schedule_id', 
        'employee_id', 
        'check_in_time', 
        'check_out_time', 
        'location', 
        'notes'
    ];

    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'schedule_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
