<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostLikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store($id)
    {
        $postlike = Post::find($id);
        if ($postlike->likedBy(auth()->user()->id)) {
            return response(null, 409);
        };
        //return $postlike->user->id;
        $postlike->likes()->create([
            //'user_id' => $postlike->user->id,
            'user_id' => auth()->user()->id,
        ]);
        return back();
    }
    public function destroy($id)
    {
        $postlike = Post::find($id);
        $postlike->likes()->where('user_id', auth()->user()->id)->where('post_id', $id)->delete();
        return back();
    }
}
