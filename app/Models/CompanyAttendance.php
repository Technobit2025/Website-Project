<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyAttendance extends Model
{
    protected $guarded = ['id'];

    protected $fillable = [
        'employee_id',
        'company_place_id',
        'checked_in_at',
        'checked_out_at',
        'status',
        'photo_path',
        'note',
        'user_note',
    ];

    protected $casts = [
        'checked_in_at' => 'datetime',
        'checked_out_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function companyPlace()
    {
        return $this->belongsTo(CompanyPlace::class);
    }
    public function getPhotoBase64Attribute()
    {
    $path = storage_path('app/public/' . $this->photo_path);

    if (!file_exists($path)) return null;

    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

    return $base64;
    }
}
