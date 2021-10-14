<?php

namespace App\Http\Controllers;

use App\Models\NoteCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function index()
    {
        return view('admin.index');
    }

    public function fetchUserData()
    {
        $users = User::all();

        return response()->json([
            'users' => $users
        ]);
    }

    public function fetchUserDataForEdit($id)
    {
        $user = User::find($id);

        if ($user) {

            return response()->json([
                'status' => 200,
                'user' => $user,
            ]);
        } else {

            return response()->json([
                'status' => 404,
                'message' => 'User Not Found'
            ]);
        }
    }

    public function updateUserData(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {

            $user = User::find($id);

            if ($user) {

                $user->name = $request->name;
                $user->email = $request->email;
                $user->update();

                return response()->json([
                    'status' => 200,
                    'message' => 'User update Successfully'
                ]);
            } else {

                return response()->json([
                    'status' => 404,
                    'message' => 'User Not Found'
                ]);
            }
        }
    }

    public function deactivateUser($id)
    {
        $user = User::find($id);


        if ($user) {
            User::where('id', $id)->delete();
            return response([
                'status' => 200,
                'message' => 'User Got Deactivated',
            ]);
        } else {

            return response([
                'status' => 404,
                'message' => 'User Not Found',
            ]);
        }
    }

    public function deactivatedUsers()
    {
        $users = User::withTrashed()->where('deleted_at', '!=', null)->get();

        if ($users) {

            return response()->json([
                'status' => 200,
                'D_users' => $users
            ]);
        } else {

            return response([
                'status' => 404,
                'message' => 'User Not Found',
            ]);
        }
    }

    public function activateUser($id)
    {
        $users = User::withTrashed();
        // return response()->json(['message' => $user]);
        

        if ($users) {

            $users->find($id)->restore();
            return response()->json([
                'status' => 200,
                'message' => 'User activated' 
            ]);
            
        } else {

            return response([
                'status' => 404,
                'message' => 'User Not Found',
            ]);
        }
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