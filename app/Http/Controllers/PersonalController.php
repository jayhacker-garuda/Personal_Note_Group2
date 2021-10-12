<?php

namespace App\Http\Controllers;

use App\Models\NoteCategory;
use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.personal.create')->with('noteCategory', NoteCategory::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'note_category_id' => 'required',
            'user_id' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        dd($data);

        // Personal::create($request->input());

        $personal                   = new Personal();
        $personal->note_category_id = $request->category_id;
        $personal->user_id          = $request->user_id;
        $personal->title            = $request->title;
        $personal->description      = $request->description;
        $personal->save();

        return $personal;
      
        return redirect()
            ->route('personal.create')
            ->with('message', 'Personal Noted Created!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function show(Personal $personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function edit(Personal $personal)
    {
        return view('dashboard.personal.edit', compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personal $personal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personal $personal)
    {
        $personal->delete();

        return redirect()->route('dashboard.index');
    }
}