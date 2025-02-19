<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model implements HasMedia
{
    use Sluggable, HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'slug',
        'title',
        'status',
        'content',
        'meta_title',
        'description',
        'created_by_id',
        'meta_description'
    ];

    public $with = [
        'tags',
        'media',
        'categories',
        'created_by'
    ];

    protected $casts = [
        'status' => 'string',
    ];

    public static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $model->created_by_id = auth()->user()->id;
        });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'blog_categories','blog_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_tags','blog_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
