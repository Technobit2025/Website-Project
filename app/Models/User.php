<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'active',
        'photo',
        'role_id',
        'employee_id',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::addGlobalScope('excludeSuperAdmin', function (Builder $builder) {
    //         $builder->where('role_id', '!=', 1);
    //     });
    // }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    public function role()
    {
        return $this->belongsTo(Role::class, "role_id");
    }
    private function getConsistentColor()
    {
        $hash = md5($this->name ?? env('APP_NAME'));
        $color = substr($hash, 0, 6);

        return $color;
    }
    public function getPhotoAttribute($value)
    {
        if (!empty($value) && !is_null($value)) {
            return asset('storage/user/photo/' . $value);
        }
        $color = $this->getConsistentColor();
        $name = $this->name ?? env('APP_NAME');

        return "https://api.dicebear.com/6.x/initials/svg?seed=" . urlencode($name) . "&backgroundColor=" . $color;
    }

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }
}
