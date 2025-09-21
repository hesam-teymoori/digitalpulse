<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'author',
        'title',      
        'excerpt',
        'content',
        'image',
        'views',
    ];
      
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getExcerptAttribute($value)
    {
        return $value ?: substr($this->content, 0, 50) . '...';
    }
    
    public function incrementViews()
    {
        $this->increment('views');
    }

}
