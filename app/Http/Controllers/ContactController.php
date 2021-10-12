<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    public function get_contact() {
        return view('main.contact');
    }

    public function store_contact(Request $request) {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'describe' => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->route('main.index');
    }
}
