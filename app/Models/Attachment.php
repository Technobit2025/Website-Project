<?php

namespace App\Models;

use App\Helpers\Helpers;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attachment extends Model
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $table = 'media';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'name',
        'file_name',
        'collection_name',
        'model_id',
        'model_type',
        'order_column',
        'disk',
        'conversions_disk',
        'mime_type',
        'size',
        'custom_properties',
        'generated_conversions',
        'responsive_images',
        'manipulations',
        'original_url',
        'preview_url',
        'created_by_id'
    ];

    protected $visible = [
        'id',
        'name',
        'file_name',
        'disk',
        'mime_type',
        'size',
        'original_url',
        'preview_url',
        'created_by_id',
        'created_at',
    ];

    public static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->model_id  = $model->id;
            $model->created_by_id = Helpers::getCurrentUserId();
        });
    }

    public function created_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
