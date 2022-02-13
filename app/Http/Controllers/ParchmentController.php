<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Parchment;

class ParchmentController extends Controller 
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = auth()->id();
        $notes = Parchment::all()->where('user_id', $id)->toArray();
        return array_reverse($notes);
    }

    public function store(Request $request) 
    {
        $id = auth()->id();
        $note = new Parchment ([
            'user_id' => $id,
            'tome_id' => $request->input('tome_id'),
            'category' => $request->input('category'),
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'date' => $request->input('date')
        ]);
        $note->save();
        return response()->json("Pergaminho criado.");
    }

    public function show ($id) 
    {
        $note = Parchment::find($id);
        return response()->json($note);
    }

    public function update ($id, Request $request) 
    {
        $note = Parchment::find($id);
        $note->update($request->all());
        return response()->json("Pergaminho atualizado.");
    }
    public function destroy ($id) 
    {
        $note = Parchment::find($id);
        $note->delete();
        return response()->json("Pergaminho deletado.");
    }

}