<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin_guest')->except('logout');
    }
    public function showAdminLogin()
    {
        return view('auth.admin_login');
    }
    public function login(Request $request)
    {
        //Validate login details
        $this->validate($request, ['email' => 'required|email', 'password' => 'required|min:6']);
        //Attempt to login user
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            //if Succesfull redirect to welcome page
            //dd(Auth::user());
            // if (Auth::guard('admin')->user()->is_super_admin == 0) {
            //     return "Normal admin";
            // } else {
            //     return "Super admin";
            // }
            return redirect('/admin/index');
        } else {
            //If not succesfull redirect back to login
            //dd(Auth::user());
            return redirect()->back()->withInput($request->only('email', 'name'));
        }
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login/show');
    }
}
