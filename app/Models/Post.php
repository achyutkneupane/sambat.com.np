<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $fillable = [
        'title', 'slug', 'category_id', 'tag_id', 'featured_image', 'post_content', 'views'
    ];
    public function category()
    {
        return $this->belongsTo('App\Post');
    }
}