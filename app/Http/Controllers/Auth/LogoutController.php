<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout()
    {
        User::where('id', Auth::user()->id)->update([
            'status' => 'inactive'
        ]);
        Auth::logout();
        
        return redirect()->route('main.index')->with('error', '.....');
    }
}