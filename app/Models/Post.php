<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'username',
        'title',
        'content'
    ];

    // public static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($post) {
    //         $post->slug = str_replace(' ', '-', $post->title);
    //     });
    // }

    public function comments()
    {
        // SELECT * from comments where <nama_class>_id = $this->id
        return $this->hasMany(Comment::class);
    }

    public function total_comments()
    {
        // SELECT COUNT(1) FROM comments
        return $this->comments()->count();
    }
}
