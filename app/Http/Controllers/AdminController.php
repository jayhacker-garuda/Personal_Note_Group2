<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminLogin()
    {
        return view('admin.adminLogin');    
    }
    
    public function index()
    {
        return view('admin.index');
    }
}