<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'imgpp'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function following():BelongsToMany
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id');
    }

    public function followers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'friends', 'friend_id', 'user_id');
    }

    public function follow(User $user)
    {
        $this->following()->syncWithoutDetaching($user);
    }

    public function unfollow(User $user)
    {
        $this->following()->detach($user);
    }

    public function isFollowing(User $user)
    {
        return $this->following()->where('friend_id', $user->id)->exists();
    }
}
