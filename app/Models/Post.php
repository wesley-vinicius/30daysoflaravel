<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url', 'content'];

    public function scopeHasUrl($query)
    {
        return $query->whereNotNull('url');
    }

    public function scopeWithoutUrl($query)
    {
        return $query->whereNull('url');
    }

    public function scopeTitleLike($query, $title)
    {
        return $query->where('title', 'LIKE', "%{$title}%");
    }

}
