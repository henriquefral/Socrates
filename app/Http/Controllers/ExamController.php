<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Exam;

class ParchmentController extends Controller 
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = auth()->id();
        $notes = Exam::all()->where('user_id', $id)->toArray();
        return array_reverse($notes);
    }

    public function store(Request $request) 
    {
        $id = auth()->id();
        $note = new Exam ([
            'user_id' => $id,
            'category' => $request->input('category'),
            'title' => $request->input('title'),
            'applicant' => $request->input('applicant'),
            'content' => $request->input('content'),
            'date' => $request->input('date')
        ]);
        $note->save();
        return response()->json("Lembrete de exame criado.");
    }

    public function show ($id) 
    {
        $note = Exam::find($id);
        return response()->json($note);
    }

    public function update ($id, Request $request) 
    {
        $note = Exam::find($id);
        $note->update($request->all());
        return response()->json("Lembrete de exame atualizado.");
    }
    public function destroy ($id) 
    {
        $note = Exam::find($id);
        $note->delete();
        return response()->json("Lembrete de exame deletado.");
    }

}