<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollowersController extends Controller
{
    public function followUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User does not exist.');
        }
        if ($user->followedBy($id)) {
            return redirect()->back()->withErrors('msg', 'You are already following this user');
        }
        $user->followers()->attach(auth()->user()->id);
        return redirect()->back()->withErrors('msg', 'Successfully followed the user.');
    }
    public function unFollowUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->withErrors('msg', 'User does not exist.');
        }
        $user->followers()->detach(auth()->user()->id);
        return redirect()->back()->with('success', 'Successfully unfollowed the user.');
    }
    public function show($id)
    {
        $user = User::find($id);
        $followers = $user->followers;
        $followings = $user->followings;
        return $followers;
        return view('public.about-us', compact('user', 'followers', 'followings'));
    }
}
