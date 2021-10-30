<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthRedirectController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype=='1') {
                return view('admin.dashboard');
            }else{
                return view('user.dashboard');
            }
        }else{
            return redirect()->back();
        }
    }
}
