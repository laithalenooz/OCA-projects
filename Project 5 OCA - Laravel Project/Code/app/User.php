<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function followedBY($id)
    {
        $user = User::find($id);
        if (auth()->check()) {
            return $this->followers->contains('id', auth()->user()->id);
        }

        // $user = User::find($id);
        // if ($user->followings->contains('id', 6)) {
        //     return "yes";
        // } else {
        //     return 'no';
        // }
        // foreach ($user->followers as $follower) {
        //     if ($follower->id == auth()->user()->id) {
        //         $followed = TRUE;
        //         return $followed;
        //     } else {
        //         $followed = false;
        //         return $followed;
        //     }
        // }
    }




    public function followers()
    {
        return $this->belongsToMany(User::class, 'followers', 'leader_id', 'follower_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followings()
    {
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'leader_id')->withTimestamps();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        //        'firstName', 'lastName', 'email', 'password', 'image', 'bio',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function posts()
    {
        return $this->hasMany(post::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
