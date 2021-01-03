<?php

namespace App\Http\Controllers;

use App\category;
use App\post;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardviews.managecategories');
    }

    public function ShowRecipes($id)
    {
        $posts = category::find($id)->posts;
        return view('public.recipes', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_category = category::orderByDesc('id')->get();

        return view('dashboardviews.managecategories', compact('all_category'));
    }

    public function CategoriesCreate()
    {
        $all_category = category::orderByDesc('id')->get();

        return view('public.categories-page', compact('all_category'));
    }


    public function validation(Request $request)
    {

        $request->validate([
            'cat_name' => 'required',
            'cat_image' => 'required',
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);

        $file = $request->cat_image->getClientOriginalExtension();
        $file_name = time() . '.' . $file;
        $path = 'storage/categories';
        $request->cat_image->move($path, $file_name);

        category::create([

            'cat_name' => $request['cat_name'],
            'cat_image' => $file_name,


        ]);

        return redirect("admin/categories");
    }

    /**
     * Display the specified resource.
     *
     * @param category $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = category::where('id', $id)->get()->first();
        return $categories;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param category $category
     * @return \Illuminate\Http\Response
     */
    public function updateView($id)
    {

        $categories = $this->show($id);
        return view('dashboardviews.editcategories', compact('categories'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'cat_name' => 'required',


        ]);

        if ($request->hasFile('cat_image')) {
            $file = $request->cat_image->getClientOriginalExtension();
            $file_name = time() . '.' . $file;
            $path = 'image/categories';
            $request->cat_image->move($path, $file_name);
        } else {
            $file_name = category::find($id)->cat_image;
        }

        category::where("id", $id)->update([
            'cat_name' => $request['cat_name'],
            'cat_image' => $file_name,
        ]);
        return redirect("admin/categories");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category_id = category::where('id', $id)->delete();
        $all_category = category::all();
        return redirect("/admin/categories");
    }
}
