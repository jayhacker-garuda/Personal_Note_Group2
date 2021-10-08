<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }


    public function registerUser(Request $request)
    {
        $request->validate([]);

        return redirect()->route('login')->with('success', '🤘🏾💀🤘🏾');
    }
}