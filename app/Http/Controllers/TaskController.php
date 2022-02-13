<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class TaskController extends Controller 
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = auth()->id();
        $notes = Task::all()->where('user_id', $id)->toArray();
        return array_reverse($notes);
    }

    public function store(Request $request) 
    {
        $id = auth()->id();
        $note = new Task ([
            'user_id' => $id,
            'title' => $request->input('title'),
            'important' => $request->input('important'),
            'date' => $request->input('date')
        ]);
        $note->save();
        return response()->json("Tarefa criada.");
    }

    public function show ($id) 
    {
        $note = Task::find($id);
        return response()->json($note);
    }

    public function update ($id, Request $request) 
    {
        $note = Task::find($id);
        $note->update($request->all());
        return response()->json("Tarefa atualizada.");
    }
    public function destroy ($id) 
    {
        $note = Task::find($id);
        $note->delete();
        return response()->json("Tarefa deletada.");
    }

}