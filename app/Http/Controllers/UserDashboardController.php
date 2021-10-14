<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Reminder;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $personalNote = Personal::where('user_id', Auth::user()->id)->get();
        $reminderNote = Reminder::where('user_id', Auth::user()->id)->get();
        $todoNote     = Todo::where('user_id', Auth::user()->id)->get();

        
        return view('dashboard.index')
        ->with('personalNote', $personalNote)
        ->with('reminderNote', $reminderNote)
        ->with('todoNote', $todoNote);
    }
}