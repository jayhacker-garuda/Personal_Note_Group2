<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function get_contact() {
        return view('main.contact');
    }

    public function store_contact(Request $request) {
        $contact = $request->validate([
            '' => 'required',

        ]);

        
    }
}
