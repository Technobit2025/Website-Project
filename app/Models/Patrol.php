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
 
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function shift()
    {
    return $this->belongsTo(CompanyShift::class, 'shift_id');
    }
    public function place()
    {
        return $this->belongsTo(CompanyPlace::class, 'place_id');
    }
    public function getPhotoBase64Attribute()
    {
    $path = storage_path('app/public/' . $this->photo);

    if (!file_exists($path)) return null;

    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

    return $base64;
    }
}
