<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    public function ppUpdate (Request $request) {

        // $path = 'storage/media';

        $this->validate($request,[
            'profilePicture' => 'required|image|max:10000|mimes:jpg,png,jpeg'
        ]);


        $filename = $request->file('profilePicture')->getClientOriginalName();

        $request->file("profilePicture")->storeAs('media', $filename,'public');


        $updateImage = User::find(Auth::id())->first()->update([
            'profile_picture' => $filename
        ]);

        return redirect()->back();
        
    }

    public function edit () {

        return redirect()->back();

    }

   

}