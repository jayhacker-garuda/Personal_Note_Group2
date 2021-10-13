<?php

namespace App\Http\Controllers;

use App\Models\NoteCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function index()
    {
        return view('admin.index')->with('users', User::paginate(5));
    }

    public function createNoteCategory()
    {
        return view('admin.noteCategory.create');
    }

    public function storeNoteCategory(Request $request)
    {   
        $request->validate([
            'name' => 'required|min:4|string'
        ]);

            
            $save = new NoteCategory;
            $save->name = $request->name;
            $save->save();

            return redirect()->route('admin.index');
    }
}