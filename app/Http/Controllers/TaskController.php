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
        $tasks = Task::all()->where('user_id', $id)->toArray();
        return array_reverse($tasks);
    }

    public function store(Request $request) 
    {
        $id = auth()->id();
        $task = new Task ([
            'user_id' => $id,
            'title' => $request->input('title'),
            'important' => $request->input('important'),
            'date' => $request->input('date')
        ]);
        $task->save();
        return response()->json("Tarefa criada.");
    }

    public function show ($id) 
    {
        $task = Task::find($id);
        return response()->json($task);
    }

    public function update ($id, Request $request) 
    {
        $task = Task::find($id);
        $task->update($request->all());
        return response()->json("Tarefa atualizada.");
    }
    public function destroy ($id) 
    {
        $task = Task::find($id);
        $task->delete();
        return response()->json("Tarefa deletada.");
    }

}