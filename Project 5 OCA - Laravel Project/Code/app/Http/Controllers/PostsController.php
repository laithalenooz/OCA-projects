<?php

namespace App\Http\Controllers;

use App\category;
use App\Like;
use App\post;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{

    public function ValidationRequest($request)
    {

        $request->validate([
            'title'      => 'required',
            'description' => 'required',
            'recipe'     => 'required',
            'image'      => 'required',
            'preparation' => 'required',
            'cooking'    => 'required',
            'serving'    => 'required',
            'cat_id'     => 'required',
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = post::all();
        //        return $post->category->cat_name;
        return view('dashboardviews.manageposts', [
            "y" => $post
        ]);
    }
    public function SingleRecipes($id)
    {
        $post = post::find($id);
        $usersposts = User::find($post->user_id)->posts;
        return view('public.single-recipe', compact('post', 'usersposts'));
    }

    public function home(post $post)
    {
        $posts = post::all();
        $mostLike = DB::table('likes')
            ->select('post_id',DB::raw('COUNT(post_id) AS ValueFrequency'))
            ->orderBy('ValueFrequency','ASC')
            ->groupBy('post_id')
            ->get();

        foreach ($mostLike as $mostLiked) {
            $x = $mostLiked->post_id;
        }

        $slider= $posts->find($x);


        return view('public.index', compact('posts', 'slider'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $current_user = Auth::user();
        $this->ValidationRequest($request);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = 'post_image' . '_' . time() . '.' . $ext;
            $file->storeAs('public/postImages', $filename);
        } else {

            $filename = 'noimage.png';
        }

        //        dd($filename);
        post::create([
            "title"            => $request->title,
            "description"      => $request->description,
            "preparation_time" => $request->preparation,
            "cooking_time"     => $request->cooking,
            "serving_people"   => $request->serving,
            "recipe"           => $request->recipe,
            "category_id"      => $request->cat_id,
            "user_id"          => $current_user->id,
            "image"            => $filename,
        ]);
        return redirect('submit-recipe');
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
     * @param post $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        $categories = category::all();

        return view('public.submit-recipe', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id', $id)->delete();
        return redirect('/admin/manage_posts');
    }
}
