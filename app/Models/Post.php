<?php

namespace App\Models;

use Carbon\Carbon;
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
        'description',
        'thumbnail',
        'category'
    ];

    public function getCreatedAtAttribute(){
        $created_at = explode(" ", $this->attributes['created_at']);
        $date = Carbon::parse($created_at[0])->translatedFormat('l, d F Y');
        $time = Carbon::parse($created_at[1])->diffForHumans();
        $this->attributes['created_at'] = $date . ' ' . $time;
        return $this->attributes['created_at'];
    }
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
