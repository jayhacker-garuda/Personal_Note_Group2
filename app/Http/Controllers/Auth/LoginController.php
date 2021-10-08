<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}

>>>>>>> 5d893577924e8b1bc8355a90da048f331eb6f8d4
=======

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {

            if (Auth::user()->user_type === 'user') {

                return redirect()->route('dashboard.index')->with('success', '.....');
            } else {
                return redirect()->route('login')->with('error', '❌❌❌');
            }
        } else {

            return redirect()->route('login')->with('error', '❌❌❌');
        }
    }
}
>>>>>>> 2c8017bde446176cd7743c54504a654d50f568f7
