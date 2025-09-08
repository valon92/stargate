<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'category',
        'order',
        'published'
    ];

    protected $casts = [
        'published' => 'boolean',
        'order' => 'integer'
    ];

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
