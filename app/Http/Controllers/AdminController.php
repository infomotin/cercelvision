<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminLogin()
    {
        return view('admin.login');
    }
    //AdminDashboard
    public function AdminDashboard()
    {
        return view('admin.admin_dashboard');
    }
    //AdminLoginSubmit
    public function AdminLoginSubmit(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $check = $request->all();
        $data = [
            'email' => $check['email'],
            'password' => $check['password'],
        ];
        if (Auth::guard('admin')->attempt($data)) {
            return redirect()->route('admin.dashboard')->with('success', 'Login Success');
        }else{
            return redirect()->route('admin.login')->with('error', 'Login Failed');
        }
        return redirect()->intended('/admin/dashboard');
    }
    //AdminLogout
    public function AdminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Logout Success');
    }
}
