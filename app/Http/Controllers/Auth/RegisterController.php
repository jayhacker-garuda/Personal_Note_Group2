<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }


    public function registerUser(Request $request)
    {
        $request->validate([
            'email'=> 'required|email|unique:users',
            'name' => 'required|string|min:4',
            'password' => 'required|min:8',
            'confirm-password' => 'same:password'
        ]);
        
        
        if ($request->method() === "POST") {
            // dd($request);
            User::create([
               'email' => $request->email,
               'name' => $request->name,
               'password' => Hash::make($request->password) 
            ]);
            return redirect()->route('login')->with('success', '🤘🏾💀🤘🏾');
        }

    }
}