<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\CarbonInterface;
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
        $time = Carbon::parse($this->attributes['created_at'])->diffForHumans();
        $this->attributes['created_at'] = $date . ' ' . $time;
        return $this->attributes['created_at'];
    }

    public function savedBy(){
        return $this->belongsToMany(User::class, 'saved_posts', 'post_id', 'user_id');
    }

    public function isSavedBy(User $user){
        return $this->savedBy()->where('user_id', $user->id)->exists();
    }
}
