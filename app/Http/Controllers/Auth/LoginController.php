<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {

            if (Auth::user()->user_type === 'user') {
                
                User::where('id', Auth::user()->id)->update([
                    'status' => 'active'
                ]);
                return redirect()->route('dashboard.index')->with('success', '.....');
                
            }elseif (Auth::user()->status === 'deactivated') {
                
                return redirect()->route('login')->with('error', '❌❌❌');
                
            } else {
                
                return redirect()->route('login')->with('error', '❌❌❌');
                
            }
        } else {

            return redirect()->route('login')->with('error', '❌❌❌');
        }
    }
}