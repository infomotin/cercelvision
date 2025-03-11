<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\Websitemail;
use App\Models\Admin;
use App\Models\User;

class AdminController extends Controller
{
    public function AdminLogin()
    {
        return view('admin.login');
    }
    //AdminDashboard
    public function AdminDashboard()
    {
        return view('admin.index');
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
    //AdminForgetPassword
    public function AdminForgetPassword()
    {
        return view('admin.forget_password');
    }
    //AdminPasswordSubmit
    public function AdminPasswordSubmit(Request $request)
    {
        $request->validate([
            'email' => 'required',
            
        ]);
        $admin_data = Admin::where('email', $request->email)->first();
        if(!$admin_data){
            return redirect()->back()->with('error', 'Email not found');
        }
        $token = hash('sha256',time());
        $admin_data->token = $token;
        $admin_data->update();
        $admin_data = Admin::where('email', $request->email)->first();
        

        $reset_link = url('admin/reset_password/'.$token.'/'.$request->email);
        $subject = 'Password Reset Link';
        $message = 'Click on the link to reset your password: '.$reset_link;
        // dd($message);
        //send mail
        $email = new Websitemail($subject, $message);
        \Mail::to($request->email)->send($email);

        return redirect()->route('admin.forget_password')->with('success', 'Password reset link sent to your email');
    }
    //AdminResetPassword
    public function AdminResetPassword($token, $email)
    {
        $admin_data = Admin::where('email', $email)->where('token', $token)->first();
        if(!$admin_data){
            return redirect()->route('admin.forget_password')->with('error', 'Invalid Token');
        }
        return view('admin.reset_password', compact('token', 'email'));
    }
    //AdminResetPasswordSubmit
    public function AdminResetPasswordSubmit(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'password' => 'required',
        //     'confirm_password' => 'required|same:password',
        // ]);

        // dd($request->all());
        $admin_data = Admin::where('email', $request->email)->first();
        // dd($admin_data);
        if(!$admin_data){
            return redirect()->route('admin.forget_password')->with('error', 'Invalid Token');
        }
        $admin_data->token = '';
        $admin_data->password = Hash::make($request->password);
        $admin_data->update();
        return redirect()->route('admin.login')->with('success', 'Password Reset Successfully');
    }
    //ViewUser
    public function ViewUser()
    {
        $allUser = Admin::all();
        return view('admin.view_user', compact('allUser'));
        
    }
    //ViewMember
    public function ViewMember()
    {
        $allMember = User::all();
        return view('admin.view_member', compact('allMember'));
        
    }
}
