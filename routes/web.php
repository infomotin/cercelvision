<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Admin;

Route::get('/', function () {
    // dd('hello');
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('member.member_dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//admin controller routes

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::post('/admin/login_submit', [AdminController::class, 'AdminLoginSubmit'])->name('admin.login_submit');
//admin.forget_password
Route::get('/admin/forget_password', [AdminController::class, 'AdminForgetPassword'])->name('admin.forget_password');
// admin.password_submit
Route::post('/admin/password_submit', [AdminController::class, 'AdminPasswordSubmit'])->name('admin.password_submit');
Route::get('/admin/reset_password/{token}/{email}', [AdminController::class, 'AdminResetPassword'])->name('admin.reset_password');
Route::post('/admin/reset_password_submit', [AdminController::class, 'AdminResetPasswordSubmit'])->name('admin.reset_password_submit');

Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    //view all user 
    Route::get('/admin/view_user', [AdminController::class, 'ViewUser'])->name('admin.view_user');
    //edit user
    // Route::get('/admin/edit_user/{id}', [AdminController::class, 'EditUser'])->name('admin.edit_user');
    // //update user
    // Route::post('/admin/update_user/{id}', [AdminController::class, 'UpdateUser'])->name('admin.update_user');
    // //delete user
    // Route::get('/admin/delete_user/{id}', [AdminController::class, 'DeleteUser'])->name('admin.delete_user');
    // all member
    Route::get('/admin/view_member', [AdminController::class, 'ViewMember'])->name('admin.view_member');
});
