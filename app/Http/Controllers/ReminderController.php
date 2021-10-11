<?php

namespace App\Http\Controllers;

use App\Models\NoteCategory;
use App\Models\Reminder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReminderController extends Controller
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
        return view('dashboard.reminder.create')->with('noteCategory', NoteCategory::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'reminder_date' => 'required|date',
            'remind_about' => 'required|max:150|string',
            'category_id' => 'required'
        ]);

        // dd($request);

        Reminder::create([
            'user_id' => Auth::user()->id,
            'reminder_date' => $request->reminder_date,
            'remind_about' => $request->remind_about,
            'note_category_id' => $request->category_id
        ]);



        return redirect()->route('dashboard.index')->with('reminder-note', '.....');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function show(Reminder $reminder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function edit(Reminder $reminder)
    {
        return view('dashboard.reminder.edit', compact('reminder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reminder $reminder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reminder  $reminder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reminder $reminder)
    {
        $reminder->delete();

        return redirect()->route('dashboard.index');
    }
}