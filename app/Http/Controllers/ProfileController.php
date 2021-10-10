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


        $currentImage =  uniqid('', true) . "." . $request->file("profilePicture")->getClientOriginalExtension();

        $saveImage = $request->file("profilePicture")->storeAs($path, $currentImage);


        $updateImage = User::find(Auth::id())->first()->update([
            'profile_picture' => $path."/".$currentImage
        ]);

        return redirect()->back();
        // dd($request->all());
        // return view('//dashboard');
    }

    public function edit () {

        return redirect()->back();

    }

   

}
