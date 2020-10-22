<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "posts";
    protected $fillable = [
        'title', 'slug', 'category_id', 'tag_id', 'featured_image', 'post_content', 'views'
    ];
    protected $dates = ['deleted_at'];
    public function category()
    {
        return $this->belongsTo('App\Models\Post');
    }
}