<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function adminLogin()
    {
        return view('admin.adminLogin');
    }

    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {

            if (Auth::user()->user_type === 'admin') {


                User::where('id', Auth::user()->id)->update([
                    'status' => 'active'
                ]);
                return redirect()->route('admin.index')->with('success', '.....');
            } else {
                return redirect()->route('admin.adminLogin')->with('error', '❌❌❌');
            }
        } else {

            return redirect()->route('admin.adminLogin')->with('error', '❌❌❌');
        }
    }
}