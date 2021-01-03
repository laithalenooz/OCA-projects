<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded = [
//        'cat_id', 'user_id', 'title', 'image', 'description', 'recipe', 'preparation_time', 'cooking_time', 'serving_people',
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function likedBy($id){

        $user = User::find($id);
        if (auth()->check()) {
            return $this->likes->contains('user_id',$user->id);
        }

}

    public function getMost($id){
        return $this->post->find($id)->get();
    }
}
