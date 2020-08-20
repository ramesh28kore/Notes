<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notes = Note::where('user_id',auth()->user()->id)
               ->orderBy('id','DESC')
               ->paginate(2);
               return view('notes.index',[
                 'notes' => $notes
               ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        auth()->user()->notes()->create([
          
            'title'=>$request->title,
            'description' =>$request->description
       
    ]);
    return redirect()->route('notes.index')->with('status','Notes Created Successfully!');       
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
        return view('notes.show',[
            'note' => $note
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
        return view('notes.edit',[
            'note' => $note
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        //
        auth()->user()->notes()->create([
          
            'title'=>$request->title,
            'description' =>$request->description
       
    ]);
    return redirect()->route('notes.index')->with('status','Notes Updated Successfully!'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        //
        $note->delete();
        return redirect()->route('notes.index')->with('status','Note deleted Successfully!');
    }
}
