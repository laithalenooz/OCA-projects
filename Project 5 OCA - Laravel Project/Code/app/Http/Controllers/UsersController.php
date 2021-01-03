<?php

namespace App\Http\Controllers;

use App\post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::all();

        return view('dashboardviews.manageusers', [
            "x" => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param user $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = user::find($id)->posts;
        $user = user::find($id);
        return view('public.single-author', compact('posts', 'user'));
    }

    public function showSingleUser($id)
    {
        $posts = user::find($id)->posts;
        $user = user::find($id);
        return view('public.user', compact('posts', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param user $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('public.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param user $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')){
            $file=$request-> image -> getClientOriginalExtension();
            $file_name=time().'.'.$file;
            $path='image/users';
            $request-> image ->move($path,$file_name);
        }
        else {
            $file_name = User::find($id)->image;
        }

        User::where("id",$id)->update([
            'firstName'=>$request['firstName'],
            'lastName'=>$request['lastName'],
            'bio'=>$request['bio'],
            'password'=>Hash::make('password'),
            'email'=>$request['email'],
            'image'=>$file_name,
        ]) ;
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param user $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        user::where('id', $id)->delete();
        return redirect('/admin/manage_users');
    }
}
