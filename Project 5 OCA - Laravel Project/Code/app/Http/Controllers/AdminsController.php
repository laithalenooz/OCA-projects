<?php

namespace App\Http\Controllers;

use App\admin;
use App\category;
use App\post;
use App\User;
use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('admin_auth');
        $this->middleware('super_admin_auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = admin::all();

        return view('dashboardviews.manageadmin', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validation($request)
    {
        $request->validate([
            'name'               => 'required',
            'email'              => 'required|email',
            'password'           => 'required|min:8|max:16',
            'is_super_admin'     => 'required',
            'image'              => 'mimes:jpeg,jpg,png,gifmax:10000',
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

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('admin/images', $filename);
        } else {
            $filename = "defult.jpg";
        }
        Admin::create([
            "name"           => $request->name,
            "email"          => $request->email,
            "password"       => $request->password,
            'is_super_admin' => $request->is_super_admin,
            "image"          => $filename,
        ]);

        return redirect('admin/manageadmin');
    }

    /**
     * Display the specified resource.
     *
     * @param admin $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param admin $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $admin = admin::where('id', $id)->get()->first();
        return view('dashboardviews.editadmin', [
            "admin" => $admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param admin $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validation($request);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('admin/images', $filename);
        } else {
            $filename = "defult.jpg";
        }
        Admin::where('id', $id)->update([
            "name"           => $request->name,
            "email"          => $request->email,
            "password"       => $request->password,
            'is_super_admin' => $request->is_super_admin,
            "image"          => $filename,

        ]);
        return redirect('admin/manageadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param admin $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins = admin::findOrFail($id);
        $admins->delete();
        return redirect('admin/manageadmin');
    }

    public function totalViews()
    {
        $totalPosts      = count(post::all());
        $totalUsers      = count(User::all());
        $totalCategories = count(category::all());
        $totalLikes      = count(Like::all());
        $activeUsers     = User::orderBy('id', 'DESC')->get();
        return view('dashboardviews.index', compact('totalPosts', 'totalUsers', 'totalCategories', 'totalLikes', 'activeUsers'));
    }

}
