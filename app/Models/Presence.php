<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
// Model Presence
public function employee()
{
    return $this->belongsTo(Employee::class);
}

public function schedule()
{
    return $this->belongsTo(Schedule::class);
}

}
