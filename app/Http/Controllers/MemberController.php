<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    // MemberProfile
    public function MemberProfile(): \Illuminate\Contracts\View\View
    {
        $AuthUser = Auth::user();
        return view('member.profile.member-profile', compact('AuthUser'));
    }

    //logout
    public function MemberLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
