<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;

class NoteController extends Controller 
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id = auth()->id();
        $notes = Note::all()->where('user_id', $id)->toArray();
        return array_reverse($notes);
    }

    public function store(Request $request) 
    {
        $id = auth()->id();
        $note = new Note ([
            'user_id' => $id,
            'title' => $request->input('title'),
            'hightlights' => $request->input('hightlights'),
            'date' => $request->input('date')
        ]);
        $note->save();
        return response()->json("Nota criada.");
    }

    public function show ($id) 
    {
        $note = Note::find($id);
        return response()->json($note);
    }

    public function update ($id, Request $request) 
    {
        $note = Note::find($id);
        $note->update($request->all());
        return response()->json("Nota atualizada.");
    }
    public function destroy ($id) 
    {
        $note = Note::find($id);
        $note->delete();
        return response()->json("Nota deletada.");
    }

}