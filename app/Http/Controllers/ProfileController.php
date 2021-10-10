<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    public function ppUpdate (Request $request) {

        $path = 'public/media';

        $this->validate($request,[
            'profilePicture' => 'required|image|max:10000'
        ]);


        $filename = $request->file('profilePicture')->getClientOriginalName();

        $request->file("profilePicture")->storeAs('media', $filename,'public');


        $updateImage = User::find(Auth::id())->first()->update([
            'profile_picture' => $filename
        ]);

        return redirect()->back();
        // dd($request->all());
        // return view('//dashboard');
    }

    public function edit () {

        return redirect()->back();

    }

   

}