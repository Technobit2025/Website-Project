<?php

namespace App\Models;

use App\Helpers\Helpers;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model implements HasMedia
{
    use Sluggable, HasFactory, SoftDeletes, HasRoles, InteractsWithMedia;

    protected $categories = [];

    public $fillable = [
        'name',
        'slug',
        'type',
        'status',
        'parent_id',
        'sort_order',
        'meta_title',
        'description',
        'created_by_id',
        'meta_description'
    ];

    protected $casts = [
        'status' => 'integer',
        'parent_id' => 'integer',
    ];

    protected $with = [
        'media',
        'childs'
    ];

    public static function boot()
    {
        parent::boot();
        static::addGlobalScope('type', function (Builder $builder) {
            $builder->where('type', 'blog');
        });

        static::saving(function ($model) {
            $model->type = 'blog';
            $model->created_by_id = \App\Helpers\Helpers::isUserLogin() ? \App\Helpers\Helpers::getCurrentUserId() : $model->id;
        });

        static::deleted(function($user) {
            $user->childs()->delete();
        });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true,
            ]
        ];
    }

    public static function getHierarchy($prefix = '', $type = null)
    {
        $categories = (new self())::with('childs')->whereNull('parent_id')->get();
        if ($type) {
            $categories = $categories->where('type', $type);
        }

        $nestedCategories = [];
        foreach ($categories as $category) {
            $nestedCategories += self::formatCategory($category);
        }

        return $nestedCategories;
    }

    private static function formatCategory($category, $prefix = '')
    {
        $formattedCategory[$category->id] = $prefix . $category->name;
        if ($category->childs) {
            foreach ($category->childs as $child) {
                $formattedCategory += self::formatCategory($child, $prefix . '- ');
            }
        }

        return $formattedCategory;
    }

    public function scopeWithOutParent($query)
    {
        return $query->whereNull('parent_id');
    }

    private function getCategories(): array
    {
        $mainCategories = self::whereNull('parent_id')->get();
        foreach ($mainCategories as $category) {
            $this->categories[] = $category->toArray();
            $this->getParentCategories($category, 0);
        }

        return $this->categories;
    }

    private function getParentCategories($category, $level)
    {
        if ($subCategories = $category->hasSubCategories) {
            $level++;
            foreach ($subCategories as $subCategory) {
                $subCategory->name = str_repeat('- ', $level) . $subCategory->name;
                $this->categories[] = $subCategory;
                $this->getParentCategories($subCategory, $level);
            }
        }
    }

    public function hasSubCategories()
    {
        return $this->hasMany($this, 'parent_id');
    }

    public function childs()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id')->orderBy('sort_order', 'ASC');
    }

    public function scopeActive($query, $value)
    {
        return $query->where('status', $value);
    }

    /**
     * @return BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

}
