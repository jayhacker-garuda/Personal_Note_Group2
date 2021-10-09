<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class UserDashboardController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $User = User::find(Auth::id())->first();

        return view('dashboard.index',compact('User'));
    }
}