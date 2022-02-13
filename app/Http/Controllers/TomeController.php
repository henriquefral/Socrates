<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tome;

class TomeController extends Controller 
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = auth()->id();
        $notes = Tome::all()->where('user_id', $id)->toArray();
        return array_reverse($notes);
    }

    public function store(Request $request) 
    {
        $id = auth()->id();
        $note = new Tome ([
            'user_id' => $id,
            'title' => $request->input('title'),
        ]);
        $note->save();
        return response()->json("Tomo criado.");
    }

    public function show ($id) 
    {
        $note = Tome::find($id);
        return response()->json($note);
    }

    public function update ($id, Request $request) 
    {
        $note = Tome::find($id);
        $note->update($request->all());
        return response()->json("Tomo atualizado.");
    }
    public function destroy ($id) 
    {
        $note = Tome::find($id);
        $note->delete();
        return response()->json("Tomo deletado.");
    }

}