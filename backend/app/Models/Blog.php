<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'author',
        'published',
        'tags',
        'views'
    ];

    protected $casts = [
        'published' => 'boolean',
        'tags' => 'array',
        'views' => 'integer'
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title);
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
